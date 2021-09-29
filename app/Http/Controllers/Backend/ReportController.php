<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report()
    {
        // $orders=order::all();

        $report=Order::all();
        return view('backend.layouts.Reports.report',compact('report'));

    }
    public function store(Request $request){

        $report=Order::whereBetween('created_at',[$request->date,$request->date1])->get();
         //dd($report);
        return view ('backend.layouts.Reports.report',compact('report'));
    }

}
