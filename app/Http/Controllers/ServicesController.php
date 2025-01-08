<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $product;

    public function __construct()
    {
        $this->product = new ProductsController;
    }

    public function index()
    {
        //
        $getAllProducts = Products::with('media_products')
        ->where('tipo', 1)
        ->paginate(20);

        return view('dashboard.services.ecommerce', ['getAllProducts' => $getAllProducts]);
    }


    public function show($id, $title)
    {
        $getSingleProduct = Products::with('media_products')->with('categories')->findOrFail($id);
        return view('dashboard.services.product-detail', ['getSingleProduct' => $getSingleProduct]);
    }

    public function showCategory($id)
    {
        $getAllCategories = Categories::where('company_id', 1)->get();
        $showCategorie = Categories::find($id);

        $getAllProducts = Products::with('media_products')
        ->with('categories')
        ->where('category_id', $id)
        ->paginate(20);

        return view('dashboard.services.ecommerce', ['getAllProducts' => $getAllProducts, 'getAllCategories' => $getAllCategories, 'showCategorie'=>$showCategorie]);
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
