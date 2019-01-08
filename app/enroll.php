<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enroll extends Model
{
    public function course(){
        return $this->belongTo('App\Courses');
   }
     public function students(){
        return $this->belongTo('Users');
     }

     public function courses()
     {
         return $this->belongsToMany(App\Courses\Course::class);
     }
}
