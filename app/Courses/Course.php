<?php

namespace App\Courses;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function courseCategory(){
        return $this->belongTo('CourseCategory');
    }
    public function lessionCourses(){
        return $this->hasMany('LessionCourses');
   }
   public function enrolls()
   {
       return $this->belongsToMany(App\enrolls::class);
   }
}
