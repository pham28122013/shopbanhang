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
        return Product::with('images')->paginate(Product::ITEMS_PER_PAGE);
    }
    
    /**
     * Show Products
     *
     * @param int $id Product id
     * @return Model
     */
    public function showProduct($id){
        return Product::find($id);
    }
}
