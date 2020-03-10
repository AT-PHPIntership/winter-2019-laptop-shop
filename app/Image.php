<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['name', 'description', 'imageable_id', 'imageable_type', 'user_id'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
