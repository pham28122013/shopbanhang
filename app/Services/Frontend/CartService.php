<?php

namespace App\Services\Frontend;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductType;
use Illuminate\Http\Request;

class CartService
{
    public function showCart($id)
    {
        return Product::with('images','type')->find($id);
    }
}