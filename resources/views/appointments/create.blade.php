<!-- resources/views/appointments/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Schedule New Appointment</h1>
    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="patient_id">Patient</label>
            <select name="patient_id" id="patient_id" class="form-control" required>
                <option value="">Select a Patient</option>
                @foreach ($patients as $patient)
                    <option value="{{ $patient->id }}" {{ old('patient_id') == $patient->id ? 'selected' : '' }}>
                        {{ $patient->first_name }} {{ $patient->last_name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="doctor_id">Doctor</label>
            <select name="doctor_id" id="doctor_id" class="form-control" required>
                <option value="">Select a Doctor</option>
                @foreach ($doctors as $doctor)
                    <option value="{{ $doctor->id }}" {{ old('doctor_id') == $doctor->id ? 'selected' : '' }}>
                        {{ $doctor->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="appointment_date">Appointment Date</label>
            <input type="datetime-local" name="appointment_date" id="appointment_date" class="form-control" value="{{ old('appointment_date') }}" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="scheduled" {{ old('status') == 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="canceled" {{ old('status') == 'canceled' ? 'selected' : '' }}>Canceled</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Schedule Appointment</button>
    </form>
</div>
@endsection
