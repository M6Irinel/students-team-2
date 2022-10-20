<?php
return [
    'validate' => function ($request) {
        return $request->validate([
            'name' => '',
            'surname' => '',
            'fiscal_code' => '',
            'email' => '',
            'date_of_birth' => '',
            'enrolment_date' => '',
            'registration_number' => '',
            'telephone_number' => ''
        ]);
    }
];
