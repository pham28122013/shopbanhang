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

    public function createProduct($request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->code = $request->code;
        $product->quantity = $request->quantity;
        $product->save();
       
    }
}
