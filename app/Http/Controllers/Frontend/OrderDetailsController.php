<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\order_details;

use Illuminate\Http\Request;

class OrderDetailsController extends Controller
{
    public function MyOrderDetails()
    {
        $orders=order_details::all();
        return view('frontend.layouts.myorderdetails',compact('orders'));
        
    }

  
}
