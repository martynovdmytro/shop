<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Category $category)
    {
        return view('products', [
            'products' => $category->product
        ]);
    }

    public function show(Product $product)
    {
        return view('product', [
            'product' => $product,
            'description' => $product->attributes,
        ]);
    }

    public function search(Request $request)
    {

        $data = new Product();
        $product = $data->getProduct($request->input('search'));

        if (empty($product->all())) {
            return back()
                ->with('message', 'Bad request');
        }

        return view('products', [
            'products' => $product
        ]);

    }
}

