<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resolution extends Model
{
    public function tests(){
        return $this->belongsTo('App\Test');
    }

    public function users(){
        return $this->belongsTo('App\User');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function ratings(){
        return $this->hasMany('App\Rating');
    }

}
