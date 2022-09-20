<?php

namespace App\Http\Controllers;

use App\Product;

use App\Category;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();

        return inertia()->render('Dashboard/products/index', [
            'products' => $products
        ]);
    }


    public function create()
    {
        $categories = Category::all();
        return inertia()->render('Dashboard/products/create', [
            'categories' => $categories
        ]);
    }


    public function store(ProductStoreRequest $request)
    {
        $data = $request->validated();

        Product::create($data);

        session()->flash('toast', [
            'type' => 'success',
            'message' => 'product created successfully'
        ]);

        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {   
        // dd($product);
        $categories = Category::all();
        return inertia()->render('Dashboard/products/edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function update(ProductUpdateRequest $request, Product $product)
    {
        $data = $request->validated();

        $product->update($data);

        session()->flash('toast', [
            'type' => 'success',
            'message' => 'product updated successfully'
        ]);

        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        session()->flash('toast', [
            'type' => 'error',
            'message' => 'product deleted successfully'
        ]);

        return redirect()->back();
    }
}
