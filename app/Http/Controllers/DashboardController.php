<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $paginatedEmployees = Employee::orderBy("created_at","desc")->paginate(10);

        return view("dashboard",[

            "employees" => $paginatedEmployees
        ]);
    }
}
