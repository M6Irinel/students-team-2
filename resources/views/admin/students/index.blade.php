@extends('admin.students.layouts.app')


@section('header')
    @include('admin.students.partials.header')
@endsection


@section('content')
    <section class="py-3">
        <div class="container-fluid">
            <div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="bg-gray-2-H transition-bg-color duration-3 scale-4-H rounded-3-H" scope="col">#</th>
                            <th class="bg-gray-2-H transition-bg-color duration-3 scale-4-H rounded-3-H" scope="col">Name</th>
                            <th class="bg-gray-2-H transition-bg-color duration-3 scale-4-H rounded-3-H" scope="col">Surname</th>
                            <th class="bg-gray-2-H transition-bg-color duration-3 scale-4-H rounded-3-H" scope="col">Registration number</th>
                            <th class="bg-gray-2-H transition-bg-color duration-3 scale-4-H rounded-3-H" scope="col">Fiscal code</th>
                            <th class="bg-gray-2-H transition-bg-color duration-3 scale-4-H rounded-3-H" scope="col">Date of birth</th>
                            <th class="bg-gray-2-H transition-bg-color duration-3 scale-4-H rounded-3-H" scope="col">Enrolment date</th>
                            <th class="bg-gray-2-H transition-bg-color duration-3 scale-4-H rounded-3-H" scope="col">Email</th>
                            <th class="bg-gray-2-H transition-bg-color duration-3 scale-4-H rounded-3-H" scope="col">Telephone number</th>
                            <th class="bg-gray-2-H transition-bg-color duration-3 scale-4-H rounded-3-H" scope="col" colspan="3">Buttons
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td class="bg-gray-2-H transition-bg-color duration-3 scale-4-H rounded-3-H" scope="row">{{ $student->id }}</td>
                                <td class="bg-gray-2-H transition-bg-color duration-3 scale-4-H rounded-3-H">{{ $student->name }}</td>
                                <td class="bg-gray-2-H transition-bg-color duration-3 scale-4-H rounded-3-H">{{ $student->surname }}</td>
                                <td class="bg-gray-2-H transition-bg-color duration-3 scale-4-H rounded-3-H">{{ $student->registration_number }}</td>
                                <td class="bg-gray-2-H transition-bg-color duration-3 scale-4-H rounded-3-H">{{ $student->fiscal_code }}</td>
                                <td class="bg-gray-2-H transition-bg-color duration-3 scale-4-H rounded-3-H">{{ $student->date_of_birth }}</td>
                                <td class="bg-gray-2-H transition-bg-color duration-3 scale-4-H rounded-3-H">{{ $student->enrolment_date }}</td>
                                <td class="bg-gray-2-H transition-bg-color duration-3 scale-4-H rounded-3-H">{{ $student->email }}</td>
                                <td class="bg-gray-2-H transition-bg-color duration-3 scale-4-H rounded-3-H">{{ $student->telephone_number }}</td>

                                <td class="bg-gray-2-H transition-bg-color duration-3 scale-4-H rounded-3-H">
                                    <a class="block btn btn-success shadow"
                                        href="{{ route('admin.students.show', $student) }}">SHOW</a>
                                </td>

                                <td class="bg-gray-2-H transition-bg-color duration-3 scale-4-H rounded-3-H">
                                    <a class="block btn btn-secondary shadow"
                                        href="{{ route('admin.students.edit', $student) }}">EDIT</a>
                                </td>
                                
                                <td class="bg-gray-2-H transition-bg-color duration-3 scale-4-H rounded-3-H">
                                    <form action="{{ route('admin.students.destroy', $student) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="block btn btn-danger shadow"
                                            href="{{ route('admin.students.destroy', $student) }}" value="DELETE" />
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection


@section('footer')
    @include('admin.students.partials.footer')
@endsection
