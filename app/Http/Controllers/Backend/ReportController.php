<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report()
    {
        $orders=order::all();


        return view('backend.layouts.Reports.report',compact('orders'));

    }
}
