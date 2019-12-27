<?php

namespace App\Services\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use Hash;

class HomeService
{
    /**
     * Get all of products
     *
     * @return Model
     */
    public function getAllProducts()
    {   
        return Product::with('images')->get();
    }

    /**
     * search the product.
     *
     * @param \Illuminate\Http\Request  $request
     * @return Model
     */
    public function getAllSearch($request)
    {
        $search = $request->search;
        return Product::where('name','like',"%$search%")->orwhere('price','like',"%$search%")->get();
    }
}