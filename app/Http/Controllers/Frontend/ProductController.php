<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{   
     /**
     * Show the profile for the given accessories.
     *
     * @param  int  $id
     * @return View
     */
    public function accessory($id)
    {
        return view('products.detail-accessories');
    }

    /**
     * Show the profile for the given products.
     *
     * @param  int  $id
     * @return View
     */
    public function product($id)
    {
        return view('products.detail');
    }

    /**
     * Show the list products-highlights.
     *
     * @return View
     */
    public function highlight()
    {
        return view('products.product-highlights');
    }

    /**
     * Show the list products-sale.
     *
     * @return View
     */
    public function sale()
    {
        return view('products.product-sale');
    }

    /**
     * Show the list cart.
     *
     * @return View
     */
    public function cart()
    {
        return view('products.cart');
    }

    /**
     * Show the list accessories.
     *
     * @return View
     */
    public function accessoriesList()
    {
        return view('products.accessories');
    }

    /**
     * Show the checkout.
     *
     * @return View
     */
    public function checkout()
    {
        return view('products.checkout');
    }
}
