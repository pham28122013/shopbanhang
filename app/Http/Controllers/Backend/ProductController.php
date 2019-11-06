<?php

namespace App\Http\Controllers\Backend;
use App\Product;
use App\ProductImage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function productList(){
        $products = Product::with('images')->Paginate(5);
        return view('admin.product.list', ['products' => $products]);
    }

    public function productshow($id){
        $product = Product::find($id);
        return view('admin.product.show',['product' => $product]);
    }



    public function productdelete($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.list');
    }

}
