<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Backend\OrderService;

class OrderController extends Controller
{
    private $orderService;

    public function __construct(OrderService $orderservice){
        $this->orderservice = $orderservice;
    }

    public function index(){
        $orders = $this->orderservice->getAllOrder();
        return view('admin.orders.list', ['orders' => $orders]);
    }
}
