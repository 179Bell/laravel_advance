<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['use_id','url','comment'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
