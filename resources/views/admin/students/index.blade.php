@extends('admin.students.layouts.app')


@section('header')
    @include('admin.students.partials.header')
@endsection


@section('content')
    <section class="py-3">
        <div class="container-fluid">
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="bg-gray-2-H transition-bg-color duration-3" scope="col">#</th>
                            <th class="bg-gray-2-H transition-bg-color duration-3" scope="col">Fullname</th>
                            <th class="bg-gray-2-H transition-bg-color duration-3" scope="col">Registration number</th>
                            <th class="bg-gray-2-H transition-bg-color duration-3" scope="col">Fiscal code</th>
                            <th class="bg-gray-2-H transition-bg-color duration-3" scope="col">Date of birth</th>
                            <th class="bg-gray-2-H transition-bg-color duration-3" scope="col">Enrolment date</th>
                            <th class="bg-gray-2-H transition-bg-color duration-3" scope="col">Email</th>
                            <th class="bg-gray-2-H transition-bg-color duration-3" scope="col">Telephone number</th>
                            <th class="bg-gray-2-H transition-bg-color duration-3" scope="col" colspan="2">Buttons</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr class="bg-gray-1-H transition-bg-color duration-3">
                                <td class="bg-gray-2-H transition-bg-color duration-3" scope="row">{{ $student->id }}</td>
                                <td class="bg-gray-2-H transition-bg-color duration-3">{{ $student->name }} {{ $student->surname }}</td>
                                <td class="bg-gray-2-H transition-bg-color duration-3">{{ $student->registration_number }}</td>
                                <td class="bg-gray-2-H transition-bg-color duration-3">{{ $student->fiscal_code }}</td>
                                <td class="bg-gray-2-H transition-bg-color duration-3">{{ $student->date_of_birth }}</td>
                                <td class="bg-gray-2-H transition-bg-color duration-3">{{ $student->enrolment_date }}</td>
                                <td class="bg-gray-2-H transition-bg-color duration-3">{{ $student->email }}</td>
                                <td class="bg-gray-2-H transition-bg-color duration-3">{{ $student->telephone_number }}</td>
                                <td class="bg-gray-2-H transition-bg-color duration-3">
                                    <a class="block btn btn-secondary" href="{{route('admin.students.edit', $student)}}">EDIT</a>
                                </td>
                                <td class="bg-gray-2-H transition-bg-color duration-3">
                                    <form action="{{route('admin.students.destroy', $student)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="block btn btn-danger" href="{{route('admin.students.destroy', $student)}}" value="DELETE"/>
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
