<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Product extends Model
{
    protected $table = 'order_product';
    protected $fillable = ['quantity', 'notional_price', 'selected', 'product_id', 'order_id'];
}
