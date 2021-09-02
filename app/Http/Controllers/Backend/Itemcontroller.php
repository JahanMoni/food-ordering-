<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

class Itemcontroller extends Controller
{
    public function Item()
    {
        $items=Item::with('category')->paginate(10);
        //        dd($products);
              

        $categories=Category::all();
        return view('backend.layouts.items.item',compact('items','categories'));
    }
        public function store(Request $request)
        {
            Item::create([
                'name' =>$request->Item_name,
                'category_item' =>$request->category_item,
                'category_id'=>$request->category_id,
                'price' =>$request->price,
                'details' =>$request->details
            
            ]); 
            return redirect()->back();
        }

}
