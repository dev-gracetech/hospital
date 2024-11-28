<!-- resources/views/appointments/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Appointments</h1>
            <a href="{{ route('appointments.create') }}" class="btn btn-primary mb-3">Schedule New Appointment</a>
            <table class="table datatable">
                <thead>
                    <tr>
                        <th>Patient</th>
                        <th>Doctor</th>
                        <th>Appointment Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->patient->first_name }} {{ $appointment->patient->last_name }}</td>
                        <td>{{ $appointment->doctor->name }}</td>
                        <td>{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('F j, Y, g:i A') }}</td>
                        <td>{{ ucfirst($appointment->status) }}</td>
                        <td>
                            <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            <a href="{{ route('appointments.show', $appointment->id) }}" class="btn btn-info btn-sm">View Details</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
