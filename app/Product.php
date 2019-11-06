<?php

namespace App;

use App\ProductImage;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    /**
     * Get images for the product
     */
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    // public function images(){
    // 	return $this->hasMany('App\ProductImage','product_id','id');
    // }
}
