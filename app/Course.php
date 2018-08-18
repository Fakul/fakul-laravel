<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function departments(){
        return $this->belongsTo('App\Department');
    }

    public function careas(){
        return $this->belongsTo('App\Carea');
    }


}
