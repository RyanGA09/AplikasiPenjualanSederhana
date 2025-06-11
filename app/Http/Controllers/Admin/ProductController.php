<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() { return view('admin.products.index', ['products' => Product::all()]); }
    public function create() { return view('admin.products.create'); }
    public function store(Request $request) {
        Product::create($request->validate([
            'name' => 'required', 'price' => 'required', 'stock' => 'required', 'description' => 'nullable'
        ]) + ['seller_id' => auth()->id()]);
        return redirect()->route('products.index');
    }
    public function edit(Product $product) { return view('admin.products.edit', compact('product')); }
    public function update(Request $request, Product $product) {
        $product->update($request->validate([
            'name' => 'required', 'price' => 'required', 'stock' => 'required', 'description' => 'nullable'
        ]));
        return redirect()->route('products.index');
    }
    public function destroy(Product $product) {
        $product->delete();
        return back();
    }
}
