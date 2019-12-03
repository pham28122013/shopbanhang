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
        $product_id = $this->insertData($request);
        $this->handleUploadImage($request,$product_id);
    }

    /**
     * insert data for the products
     *
     * @param \Illuminate\Http\Request  $request
     * @return $product->id
     */
    public function insertData($request){
        $product = new Product;
        $product->name = $request->name;
        $product->product_type_id = 1;
        $product->price = $request->price;
        $product->code = $request->code;
        $product->quantity = $request->quantity;
        $product->save();
        return $product->id;   
    }
    
    /**
     * upload image for the products
     *
     * @param \Illuminate\Http\Request  $request
     * @return void
     */
    public function handleUploadImage($request,$product_id){
        $productImage = new ProductImage;
        $productImage->product_id = $product_id;
        if($request->hasFile('image')){
			$file = $request->file('image');
			$name = $file->getClientOriginalName();
            $file->move("images/product",$name);
            $productImage->url = $name;
        }
        $productImage->save();
    }   
}
