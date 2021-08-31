<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Item;

class Itemcontroller extends Controller
{
    public function Item()
    {
        $items=Item::all();
        return view('backend.layouts.items.item',compact('items'));
    }
        public function store(Request $request)
        {
            Item::create([
                'name' =>$request->Item_name,
                'category_item' =>$request->category_item,
                'price' =>$request->price,
                'details' =>$request->details
            
            ]); 
            return redirect()->back();
        }

}
