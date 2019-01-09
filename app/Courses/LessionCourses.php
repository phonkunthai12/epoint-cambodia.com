<?php

namespace App\Courses;

use Illuminate\Database\Eloquent\Model;

class LessionCourses extends Model
{
    public function course(){
        return $this->belongTo('Course');
   }
}
