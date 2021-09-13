<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\Item;
use Illuminate\Http\Request;

class UserItemController extends Controller
{
    public function item()
    {
        $items=item::all();
        return view('frontend.layouts.item',compact('items'));
    }
    public function itemview($id)
    {
       
        $items=item::find($id);
        return view('frontend.layouts.itemview',compact('items'));
    }
    
}
