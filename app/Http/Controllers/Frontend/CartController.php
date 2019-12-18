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

    public function addCart($id)
    {
        $product = $this->cartService->showCart($id);
        Cart::add(array('id' => $product->id, 'name' => $product->name, 'quantity' => 1, 'price' => $product->price,'attributes' => ['img' => $product->images->first()->url]));
        $content = Cart::getContent();
        return redirect()->route('cart.list');
    }

    public function listCart()
    {
        $content = Cart::getContent();
        $total = Cart::getSubTotal();
        return view('products.cart',['content' => $content, 'total' => $total]);
    }

    public function destroycart($id)
    {
        Cart::remove($id);
        return redirect()->route('cart.list');
    }

}
