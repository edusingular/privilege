<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\QrCodeController;
use App\Services\ExtratoService;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $extratoService;

    public function __construct(ExtratoService $extratoService)
    {
        $this->extratoService = $extratoService;
    }

    public function index()
    {
        $extratos = $this->extratoService->getExtratos();
        
        return view('dashboard.payments.pay', ['extratos'=>$extratos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $qrcode = new QrCodeController;
        $code = $qrcode->generate('https://bi.asingular.com.br/');
        //dd($code);
        return view('dashboard.payments.processPay', ['qrcode'=>$code]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
