<!-- resources/views/appointments/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Appointment Details</h1>
    <div class="card">
        <div class="card-body">
            <h4>Patient</h4>
            <p>{{ $appointment->patient->first_name }} {{ $appointment->patient->last_name }}</p>

            <h4>Doctor</h4>
            <p>{{ $appointment->doctor->name }}</p>

            <h4>Appointment Date</h4>
            <p>{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('F j, Y, g:i A') }}</p>

            <h4>Status</h4>
            <p>{{ ucfirst($appointment->status) }}</p>

            <a href="{{ route('appointments.index') }}" class="btn btn-secondary mt-3">Back to Appointments List</a>
        </div>
    </div>
</div>
@endsection
