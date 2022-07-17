<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
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

        $prices = array();

        foreach ($items as $item) {
            $prices[] = $item['price'];
        }

        $total = array_sum($prices);

        Redis::hset('total', 'price', $total);

        return view('shopcart', [
            'items' => $items,
            'total' => $total
        ]);
    }

    /**
     * Show the delivery form for creating a new order.
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
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        Redis::hset('items', $product->id, $product);

        return back();
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
