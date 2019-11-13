<?php

namespace App\Models;

use App\ProductImage;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';


    public function images (){
        return $this->hasMany(ProductImage::class);
    }
}
