<?php

namespace App\Services\Backend;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderService
{
    /**
     * get for the order
     *
     * @return Model
     */
    public function getData()
    {
        return Order::get();
    }

    /**
     * get for the orderDetails.
     *
     * @param int $id order id
     * @return view
     */
    public function showData($id)
    {
        return Order::find($id)->orderDetails->all();
    }
}