<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\Item;
use App\Models\Category;


use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function home()
    {
        $items=Item::latest()->take(6)->get();
         $category = Category::all();
        return view('frontend.layouts.home',compact('items','category'));
        }

        public function categoryitem($id)

        {
            $Category=Category::all();
            $categoryWiseItem=Item::where('category_id',$id)->get();
            
            
            return view ('frontend.layouts.categorywise',compact('categoryWiseItem','Category'));
        }
        
        
}