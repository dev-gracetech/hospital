<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:patients',
            'phone_number' => 'nullable|string|max:15',
            'address' => 'required|string',
            'gender' => 'nullable|string|in:male,female,other',
            'dob' => 'required|date',
        ]);

        Patient::create($request->all());
        return redirect()->route('patients.index');
    }

    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:patients,email,' . $patient->id,
            'phone_number' => 'nullable|string|max:15',
            'address' => 'required|string',
            'gender' => 'nullable|string|in:male,female,other',
            'dob' => 'required|date',
        ]);

        $patient->update($request->all());
        return redirect()->route('patients.index');
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index');
    }
}