<!-- resources/views/patients/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $patient->first_name }} {{ $patient->last_name }}'s Profile</h1>
    <div class="card">
        <div class="card-body">
            <h4>Email</h4>
            <p>{{ $patient->email }}</p>

            <h4>Phone Number</h4>
            <p>{{ $patient->phone_number }}</p>

            <h4>Address</h4>
            <p>{{ $patient->address }}</p>

            <h4>Gender</h4>
            <p>{{ ucfirst($patient->gender) }}</p>

            <h4>Date of Birth</h4>
            <p>{{ \Carbon\Carbon::parse($patient->dob)->format('F j, Y') }}</p>

            <a href="{{ route('patients.index') }}" class="btn btn-secondary mt-3">Back to Patients List</a>
        </div>
    </div>
</div>
@endsection
