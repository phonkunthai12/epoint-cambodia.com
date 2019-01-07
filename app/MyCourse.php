<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyCourse extends Model
{
    public function  course()
    {
        return $this->belongsTo('App\PostActicle');
    }

}
