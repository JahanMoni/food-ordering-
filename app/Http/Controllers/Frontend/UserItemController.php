<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\Item;
use Illuminate\Http\Request;

class UserItemController extends Controller
{
    public function item($id)
    {
        $items=item::find($id);
        return view('frontend.layouts.item',compact('item'));
    }
   
}
