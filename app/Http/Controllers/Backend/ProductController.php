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

    public function create(){
        return view('admin.products.create');
    } 

    public function store(CreateProductRequest $request){
        $product = $this->productService->createProduct($request);
        return redirect()->route('products.index');
    }
}
