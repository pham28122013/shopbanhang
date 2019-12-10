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
}