<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserCategoryController extends Controller
{
    public function category()
    {
        return view('frontend.layouts.category');
    }
}
