<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\restaurant;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $checkInfo=restaurant::first();
        return view('frontend.layouts.about',compact('checkInfo'));
    }
    
}
