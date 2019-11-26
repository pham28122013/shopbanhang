<?php

namespace App\Services\Backend;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

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
        $product->product_type_id = 1;
        $product->price = $request->price;
        $product->code = $request->code;
        $product->quantity = $request->quantity;
        $product->save();
        $product_id = $product->id;
        $productImage = new ProductImage;
        $productImage->product_id = $product_id;
        $productImage->url = $request->image;
        $productImage->save();
    }
}
