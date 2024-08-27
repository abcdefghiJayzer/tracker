<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

// Display the dashboard (GET request)
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Show create form (GET request)
Route::get('/add', function () {
    return view('add');
})->name('employee.add');

// Handle form submission (POST request)
Route::post('/employee', [EmployeeController::class, 'store'])->name('employee.create');

