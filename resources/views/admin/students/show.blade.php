@extends('admin.students.layouts.app')


@section('header')
    @include('admin.students.partials.header')
@endsection


@section('content')
    <div class="container pt-5">
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th class="bg-gray-2-H transition-bg-color duration-3 scale-4-H">#</th>
                        <th class="bg-gray-2-H transition-bg-color duration-3 scale-4-H">Name</th>
                        <th class="bg-gray-2-H transition-bg-color duration-3 scale-4-H">Surname</th>
                        <th class="bg-gray-2-H transition-bg-color duration-3 scale-4-H">Date of birth</th>
                        <th class="bg-gray-2-H transition-bg-color duration-3 scale-4-H">Fiscal code</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="bg-gray-1">
                        <td class="bg-gray-2-H transition-bg-color duration-3 scale-4-H">{{ $student->id }}</td>
                        <td class="bg-gray-2-H transition-bg-color duration-3 scale-4-H">{{ $student->name }}</td>
                        <td class="bg-gray-2-H transition-bg-color duration-3 scale-4-H">{{ $student->surname }}</td>
                        <td class="bg-gray-2-H transition-bg-color duration-3 scale-4-H">{{ $student->date_of_birth }}</td>
                        <td class="bg-gray-2-H transition-bg-color duration-3 scale-4-H">{{ $student->fiscal_code }}</td>
                    </tr>
                </tbody>
            </table>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="bg-gray-2-H transition-bg-color duration-3 scale-4-H">Registration Number</th>
                        <th class="bg-gray-2-H transition-bg-color duration-3 scale-4-H">Enrolment Date</th>
                        <th class="bg-gray-2-H transition-bg-color duration-3 scale-4-H">Email</th>
                        <th class="bg-gray-2-H transition-bg-color duration-3 scale-4-H">Telephone Number</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="bg-gray-1">
                        <td class="bg-gray-2-H transition-bg-color duration-3 scale-4-H">{{ $student->registration_number }}
                        </td>
                        <td class="bg-gray-2-H transition-bg-color duration-3 scale-4-H">{{ $student->enrolment_date }}</td>
                        <td class="bg-gray-2-H transition-bg-color duration-3 scale-4-H">{{ $student->email }}</td>
                        <td class="bg-gray-2-H transition-bg-color duration-3 scale-4-H">{{ $student->telephone_number }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="flex center gap-20 mt-4">
            <div>
                <a class="block btn btn-info shadow scale-H" href="{{ route('admin.students.edit', $student) }}">EDIT</a>
            </div>
            <div>
                <form action="{{ route('admin.students.destroy', $student) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="block btn btn-danger shadow scale-H"
                        href="{{ route('admin.students.destroy', $student) }}" value="DELETE" />
                </form>
            </div>
        </div>
    </div>
@endsection


@section('footer')
    @include('admin.students.partials.footer')
@endsection
