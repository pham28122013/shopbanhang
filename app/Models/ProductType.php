<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductType extends Model
{
    protected $table = 'product_types';

    const ITEMS_PER_PAGE = 10;

}
