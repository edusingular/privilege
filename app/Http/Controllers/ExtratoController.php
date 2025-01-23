<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExtratoController extends Controller
{
    //
    public function index(){
        $extratos = Balance::where('user_id', Auth::user()->id)->paginate(20);
        return view('dashboard.Extrato.extrato', ['extratos'=>$extratos]);
    }
}
