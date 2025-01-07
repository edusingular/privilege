<?php

use App\Models\Cart;
use Illuminate\Support\Facades\Request;

function setActiveMenu($route)
{
    // Verifica se a URL atual é exatamente a mesma da rota fornecida
    return Request::is($route) ? 'active' : '';
}


function getCart()
{
    return $cartQuantity = Cart::where('user_id', 1)->sum('quantity');
}