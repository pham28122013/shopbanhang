<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\Backend\ProductService;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProductRequest;

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
    public function __construct(ProductService $productservice)
    {
        $this->productService = $productservice;
    }
    
    /**
     * list for the product.
     *
     * @return view
     */
    public function index()
    {
        $products = $this->productService->getAllProduct();
        return view('admin.products.list',['products' => $products]);
    }
    
    /**
     * create for the product.
     *
     * @return view
     */
    public function create()
    {
        $product_type = $this->productService->viewCreateProduct();
        return view('admin.products.create',['product_type' => $product_type]);  
    } 
    
    /**
     * store for the product.
     *
     * @param \Illuminate\Http\Request  $request
     * @return route
     */
    public function store(CreateProductRequest $request)
    {
        $this->productService->handleCreateProduct($request);
        return redirect()->route('products.index')->with('success','Create product successfully');
    }
}
