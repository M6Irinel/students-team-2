<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $students = Student::limit(20)->get();

        $students = Student::limit(20)->orderBy('id', 'desc')->get();


        return view('admin.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // La validazione la devi fare nel folder config dentro al file methods, il campo e gia fatto
        // ... basta inserire i valori per la validazione
        // ... facendo in questo modo scrivi solo una volta la validazione
        Student::create(config('methods.validate')($request));

        return redirect()->route('admin.students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('admin.students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('admin.students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        // La validazione la devi fare nel folder config dentro al file methods, il campo e gia fatto
        // ... basta inserire i valori per la validazione
        // ... facendo in questo modo scrivi solo una volta la validazione

            $rule = Rule::unique('students')->ignore($student->id);
            $params = $request->validate([
                'name' => 'required',
                'surname' => 'required',
                'fiscal_code' => [
                    'required',
                    $rule,
                ],
                'email' =>
                [
                    'required', 'email',
                    $rule,
                ],
                'date_of_birth' => 'required|date',
                'enrolment_date' => 'required|date',
                'registration_number' => [
                    'required',
                    $rule,
                ],
                'telephone_number' => [
                    $rule,
                ],
            ]);

        $student->update($params);

        return redirect()->route('admin.students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('admin.students.index');
    }
}
