<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dash()
    {
        
        $order_count=order::all()->count();
        return view('backend.layouts.dashboard.dash',compact('order_count'));
    }
}
