<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // dd($request);
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1); // Padrão é 1

        $product = Products::find($productId);
        if (!$product) {
            return response()->json(['status' => 'error', 'message' => 'Produto não encontrado.']);
        }
        //dd($product);

        if ($product->amount_promotion != 0) {
            $price = $product->amount_promotion;
        } else {
            $price = $product->amount;
        }

        // Verificar se o produto já está no carrinho
        $cartItem = Cart::where('user_id', Auth::user()->id)->where('product_id', $productId)->first();

        $total = $price * $quantity;

        if ($cartItem) {
            $cartItem->quantity += $quantity;
            $cartItem->total += $total;
            $cartItem->save();
        } else {
            Cart::create([
                'user_id' => Auth::user()->id,
                'product_id' => $productId,
                'company_id' => 1,
                'quantity' => $quantity,
                'price' => $price, // Adicionar o preço
                'total' => $price * $quantity, // Calcular o total
            ]);
        }

        $cartQuantity = Cart::where('user_id', Auth::user()->id)->sum('quantity');

        return response()->json([
            'status' => 'success',
            'cart_quantity' => $cartQuantity,
            'message' => 'Produto adicionado ao carrinho com sucesso!'
        ]);
    }

    public function index()
    {
        $getCarts = Cart::where('user_id', Auth::user()->id)->get();
        return view('dashboard.ecommerce.cart', ['getCarts'=>$getCarts]);
    }

    public function delete($id)
    {
        // Encontrar o item do carrinho com o ID fornecido e que pertence ao usuário logado
        $cartItem = Cart::where('id', $id)->where('user_id', Auth::user()->id)->first();
        
        // Verificar se o item foi encontrado
        if ($cartItem) {
            $cartItem->delete();
            return redirect()->back()->with('success', 'Produto removido do carrinho com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Produto não encontrado ou você não tem permissão para removê-lo.');
        }
    }


}
