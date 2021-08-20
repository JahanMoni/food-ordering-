<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class categorycontroller extends Controller
{
    public function category()
    {
        return view('backend.layouts.categories.category');
    }
}
