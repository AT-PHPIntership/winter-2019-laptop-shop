<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name', 'description', 'comfirm_address', 'confirm_phonenumber', 'status', 'etd', 'total', 'user_id'];

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
    
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
