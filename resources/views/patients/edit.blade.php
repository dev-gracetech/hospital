<!-- resources/views/patients/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Patient</h1>
    <form action="{{ route('patients.update', $patient->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old('first_name', $patient->first_name) }}" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name', $patient->last_name) }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $patient->email) }}" required>
        </div>
        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ old('phone_number', $patient->phone_number) }}" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" id="address" class="form-control" required>{{ old('address', $patient->address) }}</textarea>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="male" {{ old('gender', $patient->gender) == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ old('gender', $patient->gender) == 'female' ? 'selected' : '' }}>Female</option>
                <option value="other" {{ old('gender', $patient->gender) == 'other' ? 'selected' : '' }}>Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" id="dob" class="form-control" value="{{ old('dob', $patient->dob) }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Update Patient</button>
    </form>
</div>
@endsection
