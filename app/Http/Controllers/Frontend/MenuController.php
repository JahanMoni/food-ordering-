<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menulist()
    {
      
      
       return view('frontend.layouts.menu');
    }
}
