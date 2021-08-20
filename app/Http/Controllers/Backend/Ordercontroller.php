<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Ordercontroller extends Controller
{
    public function order()
    {
        return view('backend.layouts.orders.order');
    }
}
