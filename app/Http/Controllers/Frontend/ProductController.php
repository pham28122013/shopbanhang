<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Frontend\HomeService;

class ProductController extends Controller
{   
    /**
     * @var homeService
     */
    private $homeService;

    /**
     * initialize the function __construct
     * 
     */
    public function __construct(HomeService $homeservice)
    {
        $this->homeService = $homeservice;
    }

     /**
     * List data in home.
     *
     * @return View
     */
    public function index()
    {
        $products = $this->homeService->getAllProducts();
        return view('products.index',['products' => $products]);
    }

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
        $product = $this->homeService->getProductId($id);
        return view('products.detail',['product' => $product]);
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
