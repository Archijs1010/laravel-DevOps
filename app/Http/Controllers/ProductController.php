<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', ['allProducts' => $products]);
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $Data = $request->validate([
        'name' => 'required|string|max:255',
        'quantity' => 'required|integer|min:1',
        'description' => 'nullable|string|max:1000',
    ]);
        $product = Product::create($Data);

        
        return redirect()->route('products.index', compact('product'))->with('success', 'Produkts veiksmīgi izveidots!');
    }

    public function show(Product $product) {
        return view('products.show', ['singleProduct' => $product]);
    }

    public function destroy(Product $product) {
        $product->delete();
         return redirect()->route('products.index');
    }

    public function edit(Product $product) {
        return view('products.edit', ['singleProduct' => $product]);
        
    }

    public function update(Request $request, Product $product) {
        $data = [
            'name' => $request->name,
            'quantity' => $request->quantity,
            'description' => $request->description,
        ];

        $product->update($data);
        return redirect()->route('products.show', [$product]);
    }
}
