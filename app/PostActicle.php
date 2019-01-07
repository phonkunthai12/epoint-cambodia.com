<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostActicle extends Model
{
    public function  category()
    {
        return $this->belongsTo('App\CategoryPost');
    }
}
