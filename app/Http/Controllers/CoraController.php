<?php

namespace App\Http\Controllers;

use App\Models\Investimento;

use Carbon\Carbon;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

use Ramsey\Uuid\Guid\Guid;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class CoraController extends Controller
{

    // use MoedasTrait;

    // public function __construct()
    // {
    //     $this->loadMoedas(); // Carrega as moedas para o controller
    // }


    //
 

    public function gerarToken()
    {
        $url = env('CORA_BASE_URL') . '/token';

        $response = Http::withOptions([
            'cert' => storage_path(env('CORA_CERT_PATH')),
            'ssl_key' => storage_path(env('CORA_PRIVATE_KEY_PATH')),
        ])
            ->asForm()
            ->post($url, [
                'grant_type' => 'client_credentials',
                'client_id' => env('CORA_CLIENT_ID'),
            ]);

        if ($response->successful()) {
            return $response->json()['access_token'];
        }

        throw new Exception('Falha ao gerar token: ' . $response->body());
    }



    public function criarPix(Request $request)
    {

        $cpfFormatado = $request->cpf_cnpj; // Exemplo: '100.276.607-96'
        $cpfLimpo = preg_replace('/\D/', '', $cpfFormatado); // Remove tudo que não for número



        $valorAmericano = str_replace(",", ".", str_replace(".", "", $request->amount));
        $valorAmericano2 = intval($valorAmericano * 100); // Conversão para centavos

        if ($valorAmericano2 < 500) {
            return back()->withErrors(['message' => 'O valor mínimo para criar uma cobrança é R$5,00.']);
        }

        $vencimento = Carbon::now()->addDays(5);
        $diaFormatado = $vencimento->format('Y-m-d');

        $hash = md5(Carbon::now()->format('YmdHis') . Str::random(10));


        // Gerando um token de autenticação
        $token = $this->gerarToken(); // Certifique-se de que esse método está implementado corretamente

        // Definindo o URL da API
        $url = env('CORA_BASE_URL') . '/v2/invoices/';

        // Gerando um Idempotency-Key único para garantir que a cobrança seja única
        $idempotencyKey = (string) Guid::uuid4();
        $numeroAleatorio = mt_rand(1, 100000);

        // Definindo os dados do cliente
        $customer = [
            'code' => '' . $hash . '',
            'name' => '' . $request->nome . '',
            'tax_id' => '' . $request->cpf_cnpj . '', // CPF ou CNPJ
            'document' => [
                'identity' => '' . $cpfLimpo . '',
                'type' => 'CPF',
            ],
            'address' => [
                'street' => 'Rua Gomes de Carvalho',
                'number' => '1629',
                'district' => 'Vila Olímpia',
                'city' => 'São Paulo',
                'state' => 'SP',
                'complement' => 'N/A',
                'zip_code' => '00111222',
            ],
        ];

        // Definindo os dados do serviço
        $services = [
            [
                'name' => '' . env('APP_NAME') . '', // Descrição do serviço
                'amount' => '' . $valorAmericano2 . '', // Valor do serviço (R$ 5000)
                'description' => 'Compra - ' . env('APP_NAME') . '',
            ],
        ];

        // Enviando a requisição POST para criar a cobrança PIX
        $response = Http::withToken($token)
            ->withHeaders([
                'Idempotency-Key' => $idempotencyKey, // Passando o Idempotency-Key corretamente
                'Content-Type' => 'application/json',
                'accept' => 'application/json',
                // Definindo explicitamente o tipo de conteúdo
            ])
            ->withOptions([
                'cert' => storage_path(env('CORA_CERT_PATH')), // Caminho para o certificado
                'ssl_key' => storage_path(env('CORA_PRIVATE_KEY_PATH')), // Caminho para a chave privada
            ])

            ->post($url, [
                'amount' => $valorAmericano2, // Valor do PIX
                'payment_forms' => ['PIX'],
                'customer' => $customer, // Passando os dados do cliente
                'services' => $services, // Passando os dados dos serviços
                'payment_terms' => [
                    'due_date' => '' . $diaFormatado . '',
                    'fine' => [
                        'amount' => 0, // Corrigido para "amount"
                    ],
                    'discount' => [
                        'type' => 'PERCENT',
                        'value' => 0,
                    ],
                ],
                'metadata' => [
                    'order_id' => '' . $hash . '',
                    'description' => 'Pagamento de pedido ' . $hash . '',
                ],
            ]);

        // Verificando se a resposta foi bem-sucedida
        if ($response->successful()) {

            Investimento::create([
                'id_user' => Auth::user()->id,
                'id_moeda' => $request->token,
                'transaction' => $response['id'],
                'valor' => $valorAmericano,
                'percentual' => $percentual ?? 0.0, // Define 0.0 se estiver vazio
                'tipo' => 'deposito',
                'descricao' => 'Compra de token ' . $request->nomeToken,
                'status' => 'waiting',
                // adicione outros campos conforme necessário
            ]);


            $qrCode = QrCode::size(200)->generate($response['pix']['emv']);
            //return $response->json(); // Retorna os dados da cobrança
            return view('qrcode.cora', ['response' => $response->json(), 'moedas' => $this->moedas, 'nomeToken' => $request->nomeToken, 'valor' => $request->amount, 'qrCode' => $qrCode]);
        }
        //dd($response);
        // Caso haja erro, lança uma exceção com a mensagem do erro
        throw new Exception('Falha ao criar cobrança PIX: ' . $response->body());
    }

    public function criarEndpoint()
    {
        try {
            $client = new Client(); // Instanciando o cliente HTTP
            $idempotencyKey = (string) Str::uuid(); // Gerando um UUID único

            // Gerar o token de autenticação
            $token = $this->gerarToken();

            // URL da API Cora
            $url = env('CORA_BASE_URL') . '/endpoints/';

            // Corpo da requisição
            $body = [
                'url' => 'https://app.capitaldrex.com.br/api/webhookcora/created', // URL do webhook
                'resource' => 'invoice', // Recurso monitorado
                'trigger' => 'created', // Evento que dispara o webhook
            ];

            // Cabeçalhos
            $headers = [
                'Authorization' => "Bearer $token",
                'Idempotency-Key' => $idempotencyKey,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ];

            // Enviar a requisição POST com certificado e chave privada
            $response = $client->post($url, [
                'headers' => $headers,
                'json' => $body,
                'cert' => storage_path(env('CORA_CERT_PATH')), // Caminho para o certificado
                'ssl_key' => storage_path(env('CORA_PRIVATE_KEY_PATH')), // Caminho para a chave privada
            ]);

            // Retornar a resposta da API
            return response()->json([
                'status' => 'success',
                'data' => json_decode($response->getBody(), true),
            ]);
        } catch (\Exception $e) {
            // Captura e retorna erros
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ]);
        }
    }


    public function webhookcoraPaid(Request $request)
    {

        $resourceId = $request->header('webhook-resource-id');

        // Verificar se foi encontrado
        if (!$resourceId) {
            //Log::error('Webhook recebido sem o cabeçalho webhook-resource-id');
            return response()->json(['status' => 'error', 'message' => 'Cabeçalho ausente'], 400);
        }

        // Log para verificação
        //Log::info('Webhook-Resource-Id capturado', [$resourceId]);


        $investment = Investimento::where('transaction', $resourceId)->first();
        if ($investment) {
            $investment->update(['status' => 'paid']);
        }


        return response()->json(['status' => 'success']);
    }

    public function webhookcoraCreated(Request $request)
    {

        $resourceId = $request->header('webhook-resource-id');

        // Verificar se foi encontrado
        if (!$resourceId) {
            //Log::error('Webhook recebido sem o cabeçalho webhook-resource-id');
            return response()->json(['status' => 'error', 'message' => 'Cabeçalho ausente'], 400);
        }

        // Log para verificação
        //Log::info('Webhook-Resource-Id capturado', [$resourceId]);


        $investment = Investimento::where('transaction', $resourceId)->first();
        if ($investment) {
            $investment->update(['status' => 'waiting']);
        }


        return response()->json(['status' => 'success']);
    }


    public function webhookcoraCanceled(Request $request)
    {
        $resourceId = $request->header('webhook-resource-id');

        // Verificar se foi encontrado
        if (!$resourceId) {
            //Log::error('Webhook recebido sem o cabeçalho webhook-resource-id');
            return response()->json(['status' => 'error', 'message' => 'Cabeçalho ausente'], 400);
        }

        // Log para verificação
        //Log::info('Webhook-Resource-Id capturado', [$resourceId]);




        $investment = Investimento::where('transaction', $resourceId)->first();
        if ($investment) {
            $investment->update(['status' => 'canceled']);
        }


        return response()->json(['status' => 'success']);
    }


    public function webhookcoraOverdue(Request $request)
    {
        $resourceId = $request->header('webhook-resource-id');

        // Verificar se foi encontrado
        if (!$resourceId) {
            //Log::error('Webhook recebido sem o cabeçalho webhook-resource-id');
            return response()->json(['status' => 'error', 'message' => 'Cabeçalho ausente'], 400);
        }

        // Log para verificação
        //Log::info('Webhook-Resource-Id capturado', [$resourceId]);




        $investment = Investimento::where('transaction', $resourceId)->first();
        if ($investment) {
            $investment->update(['status' => 'overdue']);
        }


        return response()->json(['status' => 'success']);
    }
}
