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
     * Show the profile for the given products-highlights.
     *
     * @param  int  $id
     * @return View
     */
    public function highlight()
    {
        return view('products.product-highlights');
    }

    /**
     * Show the profile for the given products-sale.
     *
     * @param  int  $id
     * @return View
     */
    public function sale()
    {
        return view('products.product-sale');
    }
}
