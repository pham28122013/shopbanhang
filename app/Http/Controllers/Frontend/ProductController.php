<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\Frontend\HomeService;
use Illuminate\Http\Request;

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
     * Show the list accessories.
     *
     * @return View
     */
    public function accessoriesList()
    {
        return view('products.accessories');
    }

    /**
     * search the product.
     *
     * @param \Illuminate\Http\Request  $request
     * @return View
     */
    public function searchData(Request $request)
    {
       $search = $request->search;
       $product = $this->homeService->getAllSearch($request);
       return view('products.search',['product' => $product, 'search' => $search]);
    }
}
