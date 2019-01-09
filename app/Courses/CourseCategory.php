<?php

namespace App\Courses;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
   public function courses(){
        return $this->hasMany('Course');
   }
}
