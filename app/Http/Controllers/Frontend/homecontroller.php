<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function home(){
        $categories=Category::latest()->get()->take(6);
        return view('frontend.layouts.home',compact('categories'));
        }
}
