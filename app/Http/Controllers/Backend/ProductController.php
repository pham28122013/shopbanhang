<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\Backend\ProductService;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateProductRequest;

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

    public function edit($id){
        $product = $this->productService->getDataByProductId($id);
        return view('admin.products.edit',['product'=> $product]);
    }

    public function update(UpdateProductRequest $request, $id){
        $product = $this->productService->updateProduct($request, $id);
        return redirect()->route('products.index')->with('success','Update Product success');
    }
}
