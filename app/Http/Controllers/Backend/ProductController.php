<?php

namespace App\Http\Controllers\Backend;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(8);
        return view('products.index', ['products' => $products]);
    }
}
