<?php

namespace App\Http\Controllers;

use App\Models\Products;

class ProductsController extends Controller
{
    //

    public function getAllProducts()
    {
        $products = Products::where('company_id', 1)
        ->select('id', 'title', 'amount', 'amount_promotion', 'photo')
        ->orderBy('id', 'desc')
        ->with('media_products')
        ->where('tipo', 0)
        ->limit(10)
        ->get();
        //dd($products);
        return $products;
        
    }
    public function getAllProductsSession($tipo)
    {
        $products = Products::where('company_id', 1)
        ->where('tipo', $tipo)
        ->select('id', 'title', 'amount', 'amount_promotion', 'photo')
        ->orderBy('id', 'desc')
        ->with('media_products')
        ->limit(10)
        ->get();
        return $products;
    }
}
