<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class DashboardController extends Controller
{
    protected $product;

    public function __construct()
    {
        $this->product = new ProductsController;
    }
    
    public function index()
    {
        //
        $getAllProducts = $this->product->getAllProductsSession(0);
        $getAllProductsWorks = $this->product->getAllProductsSession(1);
        return view('dashboard.index', ['getAllProducts'=>$getAllProducts, 'getAllProductsWorks'=>$getAllProductsWorks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
