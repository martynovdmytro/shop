<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\AttributeDescription;
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
        if ($request) {
            $data = new Product();

            return view('products', [
                'products' => $data->getProduct($request->input('search'))
            ]);
        }
    }
}

