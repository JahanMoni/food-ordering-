<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function home()
    {
        $items=Item::latest()->take(6)->get();
        return view('frontend.layouts.home',compact('items'));
        }
        public function category()
        {
            $categories=category::take(6)->get();
            return view('frontend.layouts.home',compact('categories'));
            }
}
