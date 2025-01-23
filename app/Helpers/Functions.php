<?php

use App\Models\Balance;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

function setActiveMenu($route)
{
    // Verifica se a URL atual é exatamente a mesma da rota fornecida
    return Request::is($route) ? 'active' : '';
}


function getCart(){
    return $cartQuantity = Cart::where('user_id', Auth::user()->id)->sum('quantity');
}

function getBalance(){
    $amount = $getBalance = Balance::where('user_id', Auth::user()->id)
                            ->where('status','paid')                        
                            ->sum('amount');
    return number_format($amount, 2, ',','.');
}

function getBalanceCashBackAndPoints($tipo){
    $amount = $getBalance = Balance::where('user_id', Auth::user()->id)
                            ->where('status','paid')
                            ->where('tipo', $tipo)                        
                            ->sum('amount');
                ($tipo != 'Points') ? 
                    $amount = number_format($amount, 2, ',','.') :
                    $amount = $amount;
                return $amount;
}


function getStatusBadge($status) {
    switch ($status) {
        case 'paid':
            $texto = 'Pago';
            $statusClass = 'badge-light-success';
            break;
        case 'waiting':
            $texto = 'Aguardando';
            $statusClass = 'badge-light-waiting';
            break;
        case 'expired':
            $texto = 'Expirado';
            $statusClass = 'badge-light-danger';
            break;
        default:
            $texto = 'Desconhecido';
            $statusClass = 'badge-light-dark';
            break;
    }

    return [$texto, $statusClass];
}
