<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [ 'name', 'surname', 'fiscal_code', 'email', 'date_of_birth', 'enrolment_date', 'registration_number', 'telephone_number' ];
}
