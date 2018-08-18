<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestType extends Model
{
    protected $table = 'testtypes';

    public function tests(){
        return $this->hasMany('App\Test');
    }
}
