<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\Backend\ProductService;

class ProductController extends Controller
{
    private $productService;
    public function __construct(ProductService $productservice){
         $this->productService = $productservice;
    }


    public function index(){
        $products = $this->productService->getAllProduct();
        return view('admin.products.list',['products' => $products]);
    }
}
