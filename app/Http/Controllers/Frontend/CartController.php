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
    
    /**
     * Add for the Cart.
     *
     * @param int $id Product id
     * @return route
     */
    public function addCart($id)
    {
        $this->cartService->addCart($id);
        return redirect()->route('cart.list');
    }
    
    /**
     * List for the Cart.
     *
     * @return view
     */
    public function index()
    {
        $content = Cart::getContent();
        $total = Cart::getSubTotal();
        $totalquantity = Cart::getTotalQuantity();
        return view('products.cart',['content' => $content, 'total' => $total, 'totalquantity' => $totalquantity]);
    }
    
}
