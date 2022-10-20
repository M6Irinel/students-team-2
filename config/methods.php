<?php
return [
    'validate' => function ($request) {
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
];
