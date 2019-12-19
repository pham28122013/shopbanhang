<?php

namespace App\Services\Frontend;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Cart;

class CartService
{
    /**
     * Add for the Cart.
     *
     * @param int $id Product id
     * @return Model
     */
    public function addCart($id)
    {
        return Product::with('images','type')->find($id);
    }
}