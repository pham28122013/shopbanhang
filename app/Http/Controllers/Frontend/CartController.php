<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Frontend\CartService;
use Cart;

class CartController extends Controller
{
    /**
     * @var CartService
     */
    private $cartService;

    /**
     * initialize the function __construct
     * 
     */
    public function __construct(CartService $cartservice)
    {
        $this->cartService = $cartservice;
    }

    public function listCart($id)
    {
        $product = $this->cartService->showCart($id);
        Cart::add(array('id' => $product->id, 'name' => $product->name, 'quantity' => 1, 'price' => number_format($product->price),'options' => ['img' => $product->images]));
        $content = Cart::getcontent();
       
        dd($content);
        return view('products.cart',['product' => $product]);
    }
}
