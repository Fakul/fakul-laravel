<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chair extends Model
{
    public function chairsCourses(){
        return $this->hasMany('App\Chair_Course');
    }

    public function tests(){
        return $this->hasMany('App\Test');
    }
}
