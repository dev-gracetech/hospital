@extends('layouts.app')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Patients</h1>
            <a href="{{ route('patients.create') }}" class="btn btn-primary">Add New Patient</a>
            <table class="table datatable">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($patients as $patient)
                    <tr>
                        <td>{{ $patient->first_name }}</td>
                        <td>{{ $patient->last_name }}</td>
                        <td>{{ $patient->email }}</td>
                        <td>{{ $patient->phone_number }}</td>
                        <td>
                            <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
