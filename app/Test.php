<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public function shifts(){
        return $this->belongsTo('App\Shift');
    }

    public function testTypes(){
        return $this->belongsTo('App\TestType');
    }

    public function chairs(){
        return $this->belongsTo('App\Chair');
    }

    public function courses(){
        return $this->belongsTo('App\Course');
    }

    public function resolutions(){
        return $this->hasMany('App\Resolution');
    }
}
