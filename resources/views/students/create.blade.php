@extends('students.layouts.app')


@section('header')
    @include('students.partials.header')
@endsection


@section('content')
    <section class="py-4">
        <div class="container">
            <form action="{{route('students.store')}}" method="POST">

                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="name"
                        value="{{ old('name') }}">
                </div>
                
                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input type="text" name="surname" class="form-control" id="surname" placeholder="surname"
                        value="{{ old('surname') }}">
                </div>

                <div class="form-group">
                    <label for="registration_number">Registration number</label>
                    <input type="text" name="registration_number" class="form-control" id="registration_number" placeholder="registration_number = max 7 numbers"
                        value="{{ old('registration_number') }}">
                </div>

                <div class="form-group">
                    <label for="fiscal_code">Fiscal code</label>
                    <input type="text" name="fiscal_code" class="form-control" id="fiscal_code" placeholder="fiscal_code = max 16 numbers"
                        value="{{ old('fiscal_code') }}">
                </div>

                <div class="form-group">
                    <label for="date_of_birth">Date of birth</label>
                    <input type="text" name="date_of_birth" class="form-control" id="date_of_birth" placeholder="date_of_birth = yyy-mm-dd"
                        value="{{ old('date_of_birth') }}">
                </div>

                <div class="form-group">
                    <label for="enrolment_date">Enrolment date</label>
                    <input type="text" name="enrolment_date" class="form-control" id="enrolment_date" placeholder="enrolment_date = yyy-mm-dd"
                        value="{{ old('enrolment_date') }}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="email"
                        value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="telephone_number">Telephone number</label>
                    <input type="text" name="telephone_number" class="form-control" id="telephone_number" placeholder="telephone_number = max 14 numbers"
                        value="{{ old('telephone_number') }}">
                </div>

                <div class="t-center">
                    <input class="btn btn-success shadow-2-light-H" type="submit" value="SEND">
                </div>
            </form>
        </div>
    </section>
@endsection


@section('footer')
    @include('students.partials.footer')
@endsection