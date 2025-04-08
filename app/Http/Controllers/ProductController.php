<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::simplePaginate(5);
        $search = '';
        return view('products.index', compact('products', 'search'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->code = $request->code;
        $product->name = $request->name;
        $product->ammount = $request->ammount;
        $product->unit = $request->unit;
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.view', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->code = $request->code;
        $product->name = $request->name;
        $product->ammount = $request->ammount;
        $product->unit = $request->unit;
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete($product);
        return redirect()->route('products.index');
    }

    public function pdf($id){
        $product = Product::find($id);
        $pdf = Pdf::loadView('products.pdf', compact('product'));
        return $pdf->stream('product'.$product->id.'.pdf');
    }

    public function search(Request $request){
        $name = $request->search;
        $products = Product::where('name', 'like', '%'.$name.'%')->get();

        $search = $name;
        return view('products.index', compact('products', 'search'));
    }

    
}
