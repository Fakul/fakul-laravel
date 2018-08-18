<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public function users(){
        return $this->belongsTo('App\User');
    }

    public function resolutions(){
        return $this->belongsTo('App\Resolution');
    }
}
