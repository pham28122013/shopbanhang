<?php

namespace App\Services\Frontend;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductSize;
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
        return Product::with('images','type','sizes')->paginate(Product::ITEMS_PER_PAGE);
    }

    /**
     * Get all of products
     *
     * @param $id int id product
     * @return Model
     */
    public function getProductId($id)
    {
        return Product::with('images','type','sizes')->find($id);
    }
}