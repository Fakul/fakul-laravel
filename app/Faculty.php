<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = 'faculties';

    public function departments(){
        return $this->belongsTo('App\Department');
    }
}
