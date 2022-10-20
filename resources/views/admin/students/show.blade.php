@extends('admin.students.layouts.app')


@section('header')
    @include('admin.students.partials.header')
@endsection


@section('content')
    <div class="container">
        <p>{{$student->name}}</p>
        <p>{{$student->surname}}</p>
        <p>{{$student->registration_number}}</p>
        <p>{{$student->date_of_birth}}</p>
        <p>{{$student->enrolment_date}}</p>
        <p>{{$student->email}}</p>
        <p>{{$student->telephone_number}}</p>
        <p>{{$student->fiscal_code}}</p>
        <form action="{{route('admin.students.destroy', $student)}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="block btn btn-danger" href="{{route('admin.students.destroy', $student)}}" value="DELETE"/>
        </form>
        <a class="block btn btn-secondary" href="{{route('admin.students.edit', $student)}}">EDIT</a>
    </div>
@endsection


@section('footer')
    @include('admin.students.partials.footer')
@endsection
