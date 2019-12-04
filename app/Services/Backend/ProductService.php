<?php

namespace App\Services\Backend;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductType;
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
        return Product::with('images')->paginate(Product::ITEMS_PER_PAGE);
    }
    
    /**
     * create for the products
     *
     * @param \Illuminate\Http\Request  $request
     * @return void
     */
    public function handleCreateProduct($request)
    {
        $productId = $this->insertData($request);
        $this->handleUploadImage($request, $productId);
    }

    /**
     * insert data for the products
     *
     * @param \Illuminate\Http\Request  $request
     * @return $id
     */
    public function insertData($request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->product_type_id = $request->product_type_id;
        $product->price = $request->price;
        $product->code = $request->code;
        $product->quantity = $request->quantity;
        $product->save();
        return $product->id;   
    }
    
    /**
     * upload image for the product_images
     *
     * @param \Illuminate\Http\Request  $request
     * @return void
     */
    public function handleUploadImage($request, $productId)
    {   
        $value = config('define.url');
        $productImage = new ProductImage;
        $productImage->product_id = $productId;
        if($request->hasFile('image')){
			$file = $request->file('image');
			$name = $file->getClientOriginalName();
            $file->move($value ,$name);
            $productImage->url = $name;
        }
        $productImage->save();
    }   
}
