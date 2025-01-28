<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExtratoController extends Controller
{
    //
    public function index(){
        $extratos = Balance::where('user_id', Auth::user()->id)->paginate(30);
        return view('dashboard.Extrato.extrato', ['extratos'=>$extratos]);
    }

    public function cashback($cashback){
        $cashbacks = Balance::where('user_id', Auth::user()->id)
        ->where('tipo', $cashback)
        ->paginate(30);
        return view('dashboard.Cashback.cashback', ['cashbacks'=>$cashbacks]);
    }
}
