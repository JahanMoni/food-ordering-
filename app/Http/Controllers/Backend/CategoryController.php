<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        $categories=Category::all();
        return view('backend.layouts.categories.category',compact('categories'));
    }
    public function store(Request $request)
    {
        Category::create([
            'name' =>$request->Category_name,
            'details' =>$request->description
        ]); 
        return redirect()->back();
    }
    
}
