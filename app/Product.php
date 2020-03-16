<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'quantity', 'price', 'category_id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }

    public function images()
    {
        return $this->morphMany('App\Image','imageable');
    }

    public function promotions()
    {
        return $this->belongsToMany('App\Promotion');
    }
}
