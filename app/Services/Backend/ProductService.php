<?php

namespace App\Services\Backend;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductType;
use Illuminate\Http\Request;
use DB;


class ProductService
{
    /**
     * Get all of products
     *
     * @return Model
     */
    public function getAllProduct()
    {
        return Product::with('images','type')->orderBy('id', 'desc')->paginate(Product::ITEMS_PER_PAGE);
    }

    /**
     * View create Product
     *
     * @return Model
     */
    public function getProductTypeList()
    {
        return ProductType::get();
    }
    
    /**
     * create for the products
     *
     * @param \Illuminate\Http\Request  $request
     * @return bool
     */
    public function handleCreateProduct($request)
    {
        DB::beginTransaction();
        try {
            $productId = $this->insertData($request);
            $this->handleUploadImage($request, $productId);
            DB::commit();
            return true;
        } 
        catch (\Exception $ex){
            DB::rollBack();
            return false;
        }
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
     * @param int $productId Product_Id
     * @return void
     */
    public function handleUploadImage($request, $productId)
    {   
        $path = config('define.product_images_path');
        $productImage = new ProductImage;
        $productImage->product_id = $productId;
        if($request->hasFile('image')){
			$file = $request->file('image');
			$name = $file->getClientOriginalName();
            $file->move($path ,$name);
            $productImage->url = $name;
        }
        $productImage->save();
    }   
}
