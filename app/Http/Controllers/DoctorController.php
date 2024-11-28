<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all(); // Fetch all doctors
        return view('doctors.index', compact('doctors'));
    }

    public function create()
    {
        return view('doctors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'email' => 'required|email|unique:doctors',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string',
            'gender' => 'nullable|string|in:male,female,other',
            'dob' => 'required|date',
            'bio' => 'nullable|string',
        ]);

        Doctor::create($request->all());

        return redirect()->route('doctors.index');
    }

    public function edit(Doctor $doctor)
    {
        return view('doctors.edit', compact('doctor'));
    }

    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'email' => 'required|email|unique:doctors,email,' . $doctor->id,
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string',
            'gender' => 'nullable|string|in:male,female,other',
            'dob' => 'required|date',
            'bio' => 'nullable|string',
        ]);

        $doctor->update($request->all());

        return redirect()->route('doctors.index');
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();

        return redirect()->route('doctors.index');
    }
}

