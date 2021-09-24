<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Order;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order($id)
    {
        $order=Order::with('customer');
       $users=User::all();
        $item=Item::find($id);
       return view('frontend.layouts.order',compact('order','users','item'));
    }
    
}
