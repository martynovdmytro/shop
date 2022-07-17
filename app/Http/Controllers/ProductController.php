<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Store a newly created product in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $attributes = $request->validated();

        $attributes['image'] = request()
            ->file('image')
            ->store('image');
        $attributes['category_id'] = Category::all()
            ->where('name', $request->input('category'))
            ->first()->id;
        Product::create($attributes);

        return back()->with('message', 'Product succesfully created');
    }

    /**
     * Update the product in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $attributes = $request->validated();

        if (isset($attributes['image'])) {
            $attributes['image'] = request()
                ->file('image')
                ->store('image');
        }

        $attributes['category_id'] = Category::all()
            ->where('name', $request->input('category'))
            ->first()->id;

        DB::table('products')
            ->where('id', $product->id)
            ->update($attributes);

        return back()->with('message', 'Product Updated');
    }

    /**
     * Remove the product from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        DB::table('products')
            ->where('id', $product->id)
            ->delete();

        return back()->with('message', 'Product deleted');
    }
}
