<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImage;

class Product extends Model
{ 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'products';

    const ITEMS_PER_PAGE = 10;
    
    /**
     * Get the images for the products.
     *
     * @return $this
     */
    public function images() {
        return $this->hasMany(ProductImage::class);
    }
}
