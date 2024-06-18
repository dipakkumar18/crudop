<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::orderByDesc('id')->paginate(5);

        // dd($products);
        return view("product.showdata",compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        product::create([
            'name' => $request->name,
            'brand_name' => $request->brand_name,
            'price' => $request->price,
            'description' => $request->description
        ]);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        $product = product::findOrFail($product->id);
        return view("product.selectedshow",compact("product"));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        $product = product::find($product->id);
        //dd($product);
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        $product = product::findOrFail($product->id);
        $product->name = $request->name;
        $product->brand_name = strtolower($request->brand_name);
        $product->price = $request->price;
        $product->description = $request->description;
        $product->update();
        // $product->update($request->all());
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = product::find($id);
        $product->delete();
        return redirect()->route('products.index');

    }       
    
}
