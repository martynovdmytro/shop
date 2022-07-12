<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function category()
    {
        return view('categories', [
            'categories' => Category::all(),
        ]);
    }

    public function categoryProducts(Category $category)
    {
        return view('products', [
            'products' => $category->product
        ]);
    }

    public function product(Product $product)
    {
        return view('product', [
            'product' => $product,
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
