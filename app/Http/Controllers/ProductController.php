<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->paginate(25);
        $categories = Category::all();

        return view('index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('product_create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $product = new Product();
            $product->name = $request->name;
            $product->price = $request->price;
            $product->barcode = $request->barcode;
            $product->stock = $request->stock;
            $product->category_id = $request->category_id;
            $product->save();

            return redirect()->route('products.index')->with('success', 'Producto creado correctamente.');
        } catch (\Exception $e) {
            return redirect()->route('products.index')->with('error', 'Error al crear el producto.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Simple query
        $product = Product::find($id)->with('category')->first();

        return view('product_show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $product = Product::find($id)->with('category')->first();
        $categories = Category::all();

        return view('product_edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        try {
            $product->name = $request->name;
            $product->price = $request->price;
            $product->barcode = $request->barcode;
            $product->stock = $request->stock;
            $product->category_id = $request->category_id;
            $product->save();

            return redirect()->route('products.index')->with('success', 'Producto actualizado correctamente.');
        } catch (\Exception $e) {
            return redirect()->route('products.index')->with('error', 'Error al actualizar el producto.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            // dd($id);
            $product = Product::findOrFail($id);
            $product->delete();

            return redirect()->route('products.index')->with('success', 'Producto eliminado correctamente.');
        } catch (\Exception $e) {
            return redirect()->route('products.index')->with('error', 'Error al eliminar el producto.');
        }
    }
}
