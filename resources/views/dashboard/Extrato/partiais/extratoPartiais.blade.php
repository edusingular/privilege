<div class="card border-0 mb-4 shadow-sm">
    <div class="card-body p-lg-5 scrollCard">
        <div class="mb-5">
            <h4 class="mb-1">Últimas movimentações</h4>

        </div>

        <ul class="list-group list-group-flush mb-0 wfit-content">
            @forelse ($extratos as $extrato)
            @php
                if ($extrato->tipo == 'Cashback') {
                    $icone = 'bi-piggy-bank';
                    $color = '#e1972f';
                }elseif ($extrato->tipo == 'Points') {
                    $icone = 'bx-gift';
                    $color = '#ffcc00';
                }elseif ($extrato->tipo == 'Compra') {
                    $icone = 'bx-credit-card-front';
                    $color = '#72C953';
                }else{
                    $icone = 'bx-credit-card-front';
                    $color = '#e1972f';
                }
            @endphp
                <li class="list-group-item px-0 py-3 border-top">
                    <div class="d-flex justify-content-between text-dark fw-semibold fs-6">
                        <div style="width: 100px"><i class="bx {{ $icone }}" style="color:{{ $color }}; margin-right:5px"></i>  {{ $extrato->tipo }}</div>
                        <div style="width: 300px">{{ $extrato->description }}</div>
                        <div style="width: 100px">{{ ($extrato->tipo == 'Points') ? $extrato->amount.' Pontos' : 'R$'.number_format($extrato->amount, 2,',','.') }}</div>
                        <div style="width: 80px"><span class="badge {{ getStatusBadge($extrato->status)[1] }}">{{ getStatusBadge($extrato->status)[0]}}</span></div>
                        <div style="width: 153px">{{ $extrato->created_at }}</div>
                    </div>
                </li>
            @empty
                Nenhuma movimentação
            @endforelse


        </ul>

        <div class="mt-4">
            <div class="d-flex justify-content-center">
                {{ $extratos->links() }}
            </div>
        </div>
    </div>
</div>
