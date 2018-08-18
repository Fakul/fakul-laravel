<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //missing the User model
    public function users(){
        return $this->belongsTo('App\User');
    }

    public function resolutions(){
        return $this->belongsTo('App\Resolution');
    }
}
