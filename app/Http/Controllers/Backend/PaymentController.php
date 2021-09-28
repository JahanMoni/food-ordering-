<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment()
    {
        return view('backend.layouts.Payments.payment');
    }
    public function paymentlist($id)
    {
        $orders=order::find($id);
        $users=User::all();
        
        return view('backend.layouts.Payments.paymentlist',compact('orders','users'));
    }

    public function store(Request $request)
    {
         Payment:: Create([
        
            'user_id'=>auth()->user()->id,
           'order_id'=>$request->order_id,
           'pay_at'=>$request->date,
           'total_payment'=>$request->total_payment,
        
       

  ]);
  return redirect()->back();
}



    
}
