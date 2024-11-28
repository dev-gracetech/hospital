<!-- resources/views/doctors/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $doctor->name }}'s Profile</h1>
    <div class="card">
        <div class="card-body">
            <h4>Specialization</h4>
            <p>{{ $doctor->specialization }}</p>

            <h4>Email</h4>
            <p>{{ $doctor->email }}</p>

            <h4>Phone Number</h4>
            <p>{{ $doctor->phone_number }}</p>

            <h4>Address</h4>
            <p>{{ $doctor->address }}</p>

            <h4>Gender</h4>
            <p>{{ ucfirst($doctor->gender) }}</p>

            <h4>Date of Birth</h4>
            <p>{{ \Carbon\Carbon::parse($doctor->dob)->format('F j, Y') }}</p>

            <a href="{{ route('doctors.index') }}" class="btn btn-secondary mt-3">Back to Doctors List</a>
        </div>
    </div>
</div>
@endsection
