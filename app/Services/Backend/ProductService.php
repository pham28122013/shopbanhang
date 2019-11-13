<?php

namespace App\Services\Backend;

use App\Models\Product;

class ProductService
{
    /**
     * Get all of products
     *
     * @return Model
     */
    public function getAllProduct()
    {
        return Product::paginate(10);
    }
}
