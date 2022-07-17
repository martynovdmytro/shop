<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class OrderController extends Controller
{
    /**
     * Store a new order in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $total = Redis::hget('total', 'price');

        $orderId = DB::table('orders')->insertGetId(['total' => $total]);

        foreach (Redis::hgetall('items') as $item) {
            $items[] = json_decode($item, true);
        }

        foreach ($items as $item) {
            DB::table('order_product')->insert(['order_id' => $orderId, 'product_id' => $item['id']]);
        }

        return $orderId;
    }
}
