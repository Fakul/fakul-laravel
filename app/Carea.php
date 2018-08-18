<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carea extends Model
{
    public function courses(){
        return $this->hasMany('App\Course');
    }
}
