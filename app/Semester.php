<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    public function chairsCourses(){
        return $this->hasMany('App\Chair_Course');
    }
}
