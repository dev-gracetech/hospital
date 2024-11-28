@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Doctor</h1>
    <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $doctor->name }}" required>
        </div>
        <div class="form-group">
            <label for="specialization">Specialization</label>
            <input type="text" name="specialization" id="specialization" class="form-control" value="{{ $doctor->specialization }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $doctor->email }}" required>
        </div>
        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ $doctor->phone_number }}" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" id="address" class="form-control" required>{{ $doctor->address }}</textarea>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="male" {{ $doctor->gender == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ $doctor->gender == 'female' ? 'selected' : '' }}>Female</option>
                <option value="other" {{ $doctor->gender == 'other' ? 'selected' : '' }}>Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" id="dob" class="form-control" value="{{ $doctor->dob }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Update Doctor</button>
    </form>
</div>
@endsection
