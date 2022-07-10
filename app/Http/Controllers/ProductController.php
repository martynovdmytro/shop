<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Request;

class ProductController extends Controller
{
    public function index(Category $category)
    {
        return view('products', [
            'products' => $category->product
        ]);
    }

    public function store()
    {
        $attributes = request()
            ->validate([
                'title' => ['required'],
                'slug' => ['required'],
                'description' => ['required'],
                'price' => ['required'],
                'amount' => ['required']
            ]);

        Product::create($attributes);

        return back();
    }

    public function show(Product $product)
    {
        return view('product', [
            'product' => $product,
            'description' => $product->attributes,
        ]);
    }

    public function search()
    {

        $product = Product::all()->where('title', request()->input('search'));

        if (empty($product->all())) {
            return back()
                ->with('message', 'Bad request');
        }

        return view('products', [
            'products' => $product
        ]);

    }
}
