<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Employeecontroller extends Controller
{
    public function employee()
    {
        return view('backend.layouts.employees.employee');
    }
}
