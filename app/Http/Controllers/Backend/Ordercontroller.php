<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;

class Ordercontroller extends Controller
{
    public function order()
    {
        $orders=order::paginate(3);
        return view('backend.layouts.orders.order',compact('orders'));
    }
    
}
