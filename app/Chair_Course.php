<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chair_Course extends Model
{
    protected $table = 'chairs_courses';

    public function chairs(){
        return $this->belongsTo('App\Chair');
    }

    public function courses(){
        return $this->belongsTo('App\Course');
    }

    public function teachers(){
        return $this->belongsTo('App\Teacher');
    }

    public function semesters(){
        return $this->belongsTo('App\Semester');
    }
}
