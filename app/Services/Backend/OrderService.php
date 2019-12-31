<?php

namespace App\Services\Backend;

use App\Models\Order;
use App\Models\User;
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
        return Order::paginate(User::ITEMS_PER_PAGE);
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