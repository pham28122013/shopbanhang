<?php

namespace App\Services\Backend;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderService
{
   public function getAllOrder(){
       return $orders = Order::paginate(10);
   }
}