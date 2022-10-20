<?php
return [

    // validazione per la vreazione dello studente nuovo
    'validate_for_created' => function ($request) {
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
    },


    // validazione per modifica di un studente gia creato
    'validate_for_update' => function ($request, $rule_unique_ignore) {
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
];
