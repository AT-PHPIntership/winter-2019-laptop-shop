<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = ['name', 'description', 'discount', 'time_start', 'time_end'];
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
