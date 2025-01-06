<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class EcommerceController extends Controller
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
        $getAllCategories = Categories::where('company_id', 1)
                            ->get();
        $getAllProducts = $this->product->getAllProducts();
        return view('dashboard.ecommerce.ecommerce' ,['getAllProducts'=>$getAllProducts, 'getAllCategories'=>$getAllCategories]);
    }


    public function show($id, $title)
    {
        $getSingleProduct = Products::with('media_products')->findOrFail($id);
        return view('dashboard.ecommerce.product-detail', ['getSingleProduct'=>$getSingleProduct]);
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
