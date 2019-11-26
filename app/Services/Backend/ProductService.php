<?php

namespace App\Services\Backend;

use App\Models\Product;
use App\Models\ProductImage;

class ProductService
{
    /**
     * Get all of products
     *
     * @return Model
     */
    public function getAllProduct()
    {
        return Product::paginate(Product::ITEMS_PER_PAGE);
    }

    public function getDataByProductId($id)
    {
        return Product::find($id);
    }

    public function updateProduct($request, $id){
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->code = $request->code;
        $product->quantity = $request->quantity;
        $product->save();
        $product_id = $product->id;
        $productImage = ProductImage::find($id);
        $productImage->product_id = $product_id;
        if($request->image){
			$productImage->url = $request->image;
		}else{
            $productImage->url = $product->images->first()->url;
        }
        $productImage->save();
    }
}
