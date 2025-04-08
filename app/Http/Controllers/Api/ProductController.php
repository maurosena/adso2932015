<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {/* Metodo Get */
        $products = Product::all();
        return response()->json(['listofproducts' => $products], 200);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //post
    {
        $productnew = new Product();
        $productnew->code = $request->code;
        $productnew->name = $request->name;
        $productnew->ammount = $request->ammount;
        $productnew->unit = $request->unit;
        $productnew->save();
        return response()->json(['productnew' => $productnew]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product) //Get one
    {   $error = "Error ";
        if (!$product)
            return response()->json(['error' =>$error], 404);
        else{
        return response()->json(['product' => $product]);}
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product) //Put
    {
        $product->code = $request->code;
        $product->name = $request->name;
        $product->ammount = $request->ammount;
        $product->unit = $request->unit;
        $product->save();
        return response()->json(['productupdate' => $product]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product) //delete
    {
        $product->delete();
        return response()->json(['deleteproduct' => $product]);
    }
}
