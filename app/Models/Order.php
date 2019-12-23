<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\OrderDetail;

class Order extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'orders';

    const ITEMS_PER_PAGE = 10;
    
    /**
     * Get the images for the products.
     *
     * @return $this
     */
    public function orderDetails() {
        return $this->hasMany(OrderDetail::class);
    }
}
