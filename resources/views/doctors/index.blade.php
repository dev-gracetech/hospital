@extends('layouts.app')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Doctors</h1>
            <a href="{{ route('doctors.create') }}" class="btn btn-primary">Add New Doctor</a>
            <table class="table datatable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Specialization</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($doctors as $doctor)
                    <tr>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->specialization }}</td>
                        <td>{{ $doctor->email }}</td>
                        <td>{{ $doctor->phone_number }}</td>
                        <td>
                            <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" class="d-inline">
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
