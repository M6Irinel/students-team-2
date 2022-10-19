@extends('students.layouts.app')


@section('header')
    @include('students.partials.header')
@endsection


@section('content')
    <section class="py-4">
        <div class="container">
            <form action="{{ route('students.update', $student) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                        placeholder="name" value="{{ old('name', $student->name) }}">
                    @error('name')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror"
                        id="surname" placeholder="surname" value="{{ old('surname', $student->surname) }}">
                    @error('surname')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="registration_number">Registration number</label>
                    <input type="text" name="registration_number"
                        class="form-control @error('registration_number') is-invalid @enderror" id="registration_number"
                        placeholder="registration_number"
                        value="{{ old('registration_number', $student->registration_number) }}">
                    @error('registration_number')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="fiscal_code">Fiscal code</label>
                    <input type="text" name="fiscal_code" class="form-control @error('fiscal_code') is-invalid @enderror"
                        id="fiscal_code" placeholder="fiscal_code" value="{{ old('fiscal_code', $student->fiscal_code) }}">
                    @error('fiscal_code')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="date_of_birth">Date of birth</label>
                    <input type="text" name="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror"
                        id="date_of_birth" placeholder="date_of_birth"
                        value="{{ old('date_of_birth', $student->date_of_birth) }}">
                    @error('date_of_birth')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="enrolment_date">Enrolment date</label>
                    <input type="text" name="enrolment_date" class="form-control @error('enrolment_date') is-invalid @enderror"
                        id="enrolment_date" placeholder="enrolment_date"
                        value="{{ old('enrolment_date', $student->enrolment_date) }}">
                    @error('enrolment_date')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" placeholder="email" value="{{ old('email', $student->email) }}">
                    @error('email')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="telephone_number">Telephone number</label>
                    <input type="text" name="telephone_number" class="form-control @error('telephone_number') is-invalid @enderror"
                        id="telephone_number" placeholder="telephone_number"
                        value="{{ old('telephone_number', $student->telephone_number) }}">
                    @error('telephone_number')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
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
