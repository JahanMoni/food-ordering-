<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\order_details;

use Illuminate\Http\Request;

class OrderDetailsController extends Controller
{
    public function MyOrderDetails()
    {
        $orders=order_details::where('user_id',auth()->user()->id)->get();
        return view('frontend.layouts.myorderdetails',compact('orders'));
        
    }
    

  
}
