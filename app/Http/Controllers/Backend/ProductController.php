<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\Backend\ProductService;

class ProductController extends Controller
{ 
    /**
     * @var ProductService
     */
    private $productService;

    /**
     * initialize the function __construct
     * 
     */
    public function __construct(ProductService $productservice){
         $this->productService = $productservice;
    }
    
    /**
     * list for the product.
     *
     * @return view
     */
    public function index(){
        $products = $this->productService->getAllProduct();
        return view('admin.products.list',['products' => $products]);
    }
    
    /**
     * Show for the Product.
     *
     * @param int $id Product id
     * @return view
     */
    public function show($id){
        $product = $this->productService->showProduct($id);
        return view('admin.products.show', ['product' => $product]);
    }
}
