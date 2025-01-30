<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class pcontroll extends Controller
{
    // form to create a product
    public function create()
    {
        return view('admin.create_product');
    }

    // Add new product
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'recommend' => 'nullable|boolean'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        } else {
            $imagePath = null;
        }

        product::create([
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'],
            'image' => $request->file('image')->hashName(),
            'recommend' => $request->boolean('recommend'),
            'count' => 0,
        ]);

        return redirect()->route('product.search')->with('success', 'product added successfully.');
    }

    // form to edit a product
    public function edit($id)
    {
        $product = product::findOrFail($id);
        return view('admin.edit_product', compact('product'));
    }

    // Update product
    public function update(Request $request, $id)
    {
        $product = product::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'recommend' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }

        $product->update([
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'],
            'image' => $product->image,
            'recommend' => $request->input('recommend', 0),
        ]);

        return redirect()->route('product.search')->with('success', 'product updated successfully.');
    }

    // Delete product
    public function destroy($id)
    {
        $product = product::findOrFail($id);
        $product->delete();

        return redirect()->route('product.search')->with('success', 'product deleted successfully.');
    }

    public function processCheckout($id){
        $product = product::findOrFail($id);
        $product->increment('count');
        return view('checkout', compact('product'));
    }
}
