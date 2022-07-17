<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    /**
     * Display admin index.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('components.header.admin.admin-index');
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('components.header.admin.admin-product-create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Display the category.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCategory()
    {
        return view('components.header.admin.admin-category-list',[
            'categories' => Category::all()
        ]);
    }

    /**
     * Display the product by chosen category.
     *
     * @param  Category $category
     * @return \Illuminate\Http\Response
     */
    public function showProduct(Category $category)
    {
        return view('components.header.admin.admin-product-list',[
            'products' => $category->products
        ]);
    }

    /**
     * Show the form for editing a chosen product.
     *
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('components.header.admin.admin-product-edit', [
            'product' => $product,
            'categories' => Category::all()
        ]);
    }
}
