<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserCategoryController extends Controller
{
    public function category()
    {
        $categories=category::all();
        return view('frontend.layouts.category',compact('categorys'));
    }
    
}
