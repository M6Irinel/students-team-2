<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    public const LEVEL_NAME = ['Triennale', 'Magistrale'];


    public function students()
    {
        return $this->hasMany('App\Student');
    }

    
    public function courses()
    {
        return $this->hasMany('App\Course');
    }
}
