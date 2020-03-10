<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['target_id', 'target_table', 'content', 'rating', 'user_id'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
