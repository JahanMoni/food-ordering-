<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Category;
use Illuminate\Http\Request;

class categorycontroller extends Controller
{
    public function category()
    {
        return view('backend.layouts.categories.category');
    }
    public function store(Request $request)
    {
        category::create([
            'name'=>$request->Category_name,
            'details'=>$request->description
        ]);
    }
    
}
