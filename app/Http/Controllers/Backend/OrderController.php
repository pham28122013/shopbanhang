<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Backend\OrderService;

class OrderController extends Controller
{
     /**
     * @var OrderService
     */
    private $orderService;

    /**
     * initialize the function __construct
     * 
     */
    public function __construct(OrderService $orderservice)
    {
        $this->orderService = $orderservice;
    }

    /**
     * list for the order.
     *
     * @return view
     */
    public function index()
    {
        $orders = $this->orderService->getData();
        return view('admin.order.list',['orders' => $orders]);
    }

    /**
     * show for the orderDetails.
     *
     * @param int $id Product id
     * @return view
     */
    public function showOrderDetails($id)
    {
        $order = $this->orderService->showData($id);
        return view('admin.order.show',['order' => $order]);
    }
}
