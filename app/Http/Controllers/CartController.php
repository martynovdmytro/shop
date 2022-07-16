<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CartController extends Controller
{
    /**
     * Display a listing of the shop cart.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = array();

        foreach (Redis::hgetall('items') as $item) {
            $items[] = json_decode($item, true);
        }

        return view('shopcart', [
            'items' => $items
        ]);

    }

    /**
     * Create a new order.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Product $product)
    {
        return view('components.header.delivery-form');
    }

    /**
     * Store products to the cart.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        Redis::hset('items', $product->id, $product);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Clear session.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Product $product)
    {
        if($request->is("cart/delete/$product->id")){
            Redis::hdel('items', $product->id, $product);
        }

        if ($request->is('cart/delete/all')) {
            Redis::del('items');
        }

        return back();
    }
}
