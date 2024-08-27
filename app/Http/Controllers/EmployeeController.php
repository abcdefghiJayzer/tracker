<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'age'   => 'required|integer|min:1',
            'work'  => 'required|string|max:255',
        ]);

        // Create a new employee
        $employee = new Employee([
            'name'  => $validatedData['name'],
            'email' => $validatedData['email'],
            'age'   => $validatedData['age'],
            'work'  => $validatedData['work'],
        ]);

        $employee->save();

        // Redirect with a success message
        return redirect()->route('dashboard')->with('success', 'Employee added successfully!');
    }
}
