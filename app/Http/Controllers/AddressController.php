<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdateAddressRequest;
use App\Models\Address;
use App\Models\Order;
use Illuminate\Support\Facades\Redis;

class AddressController extends Controller
{
    /**
     * Store a delivery address in storage.
     *
     * @param  \App\Http\Requests\StoreAddressRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAddressRequest $request)
    {
        $attributes = $request->validated();

        $order = New OrderController();

        $orderId = $order->store();

        $attributes['order_id'] = $orderId;

        $create = Address::create($attributes);

        if ($create) {
            Redis::del('items');
        }

        return redirect('/cart')->with('message', 'Order created');
    }
}
