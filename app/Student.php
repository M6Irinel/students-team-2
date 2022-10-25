<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'fiscal_code',
        'email',
        'date_of_birth',
        'enrolment_date',
        'registration_number',
        'telephone_number'
    ];


    public static function validate_for_created($request)
    {
        return $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'fiscal_code' => 'required|unique:students',
            'email' => 'required|email|unique:students',
            'date_of_birth' => 'required|date',
            'enrolment_date' => 'required|date',
            'registration_number' => 'required|unique:students',
            'telephone_number' => 'unique:students'
        ]);
    }


    public static function validate_for_update($request, $rule_unique_ignore) {
        return $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'fiscal_code' => ['required', $rule_unique_ignore],
            'email' => ['required', 'email', $rule_unique_ignore],
            'date_of_birth' => 'required|date',
            'enrolment_date' => 'required|date',
            'registration_number' => ['required', $rule_unique_ignore],
            'telephone_number' => [$rule_unique_ignore],
        ]);
    }

    public function degree() {
        return $this->belongTo('App\Degree');
    }
}
