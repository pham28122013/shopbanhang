<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Frontend\OrderService;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetail;
use Cart;
use Auth;

class OrderController extends Controller
{
     /**
     * @var orderService
     */
    private $orderService;

    public function __construct(OrderService $orderService)
    {
       $this->orderService = $orderService;
    }

    /**
     * create for the order.
     *
     * @return view
     */
    public function create()
    {
        $content = Cart::getContent();
        $total = Cart::getSubTotal();
        return view('products.checkout',['content' => $content, 'total' => $total]);
    }
    /**
     * store for the product.
     *
     * @param \Illuminate\Http\Request  $request
     * @return route
     */
    public function store(Request $request)
    {
        $result = $this->orderService->handleCreateOrder($request);
        if ($result) {
            return redirect()->route('home.index')->with('success','Created product successfully');
        }
        return redirect()->route('home.index')->with('failed','Create product failed');
    }
}
