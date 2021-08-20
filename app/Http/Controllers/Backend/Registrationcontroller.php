<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Registrationcontroller extends Controller
{
    public function registration()
    {
        return view('backend.layouts.registrations.registration');
    }
}
