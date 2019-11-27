<?php

namespace App\Models;

use App\ProductImage;
use App\ProductSize;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';


    public function images (){
        return $this->hasMany(ProductImage::class);
    }

    public function sizes(){
        return $this->hasMany(ProductSize::class);
    }
}
