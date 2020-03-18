<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPromotion extends Model
{
    protected $table = 'product_promotion';
    protected $fillable = ['product_id', 'promotion_id'];
}
