<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public const COURSE_NAME = ['Biologia', 'Matematica', 'Economia', 'Geografia', 'Sport', 'Fisica', 'Coding'];
    public const PERIOD = ['I semestre', 'II semestre', 'Annuale'];
    public const CFU = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 15, 20, 25, 30];


    public function degree()
    {
        return $this->belongsTo('App\Degree');
    }


    public function teachers()
    {
        return $this->belongsToMany('App\Teacher');
    }
}
