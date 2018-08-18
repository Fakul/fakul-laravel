<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function roles(){
        return $this->belongsTo('App\Role');
    }

    public function careas(){
        return $this->belongsTo('App\Carea');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function ratings(){
        return $this->hasMany('App\Rating');
    }

    public function resolutions(){
        return $this->hasMany('App\Resolution');
    }
}
