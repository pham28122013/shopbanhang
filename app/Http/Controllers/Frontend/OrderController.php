<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Frontend\OrderService;
use App\Models\Order;
use App\Models\OrderDetail;
use Cart;

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

    public function create()
    {
        $content = Cart::getContent();
        $total = Cart::getSubTotal();
        return view('products.checkout',['content' => $content, 'total' => $total]);
    }

    public function store(Request $request)
    {
        $order = new Order;
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->email = $request->email;
        $order->note = $request->note;
        $order->save();
        $content = Cart::getContent();
        dd($content);
        foreach ($content as $value) {
            $order_details = new OrderDetail;
            $order_details->order_id = $order->id;
            $order_details->product_id = $value->id;
            $order_details->quantity = $value->quantity;
            $order_details->product_name = $value->name;
            $order_details->code = $value->code;
            $order_details->size = $value->size;
            $order_details->price = $value->price;
            $order_details->save();
        }
        Cart::destroy();
    }
}
