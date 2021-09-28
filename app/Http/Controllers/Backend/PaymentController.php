<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function paymentlist()
    {
        $payments=Payment::all();
        return view('backend.layouts.Payments.paymentlist',compact('payments'));
    }
    public function paymentcreate($id)

    {  
       
        
            $orders=order::find($id);
            $payments=Payment::all();
           
        
    
            return view('backend.layouts.Payments.payment',compact('orders','payments'));
 
    }
         
         
    public function store(Request $request)
        {
         

        {
            Payment::create([
                'user_id'=>auth()->user()->id,
                'order_id'=>$request->order_id,
                
                'total_payment'=>$request->total_payment,
                'pay_at'=>$request->date,
            
            ]); 
            return redirect()->back();
        }
    }

    public function approve($id)
     {
        Payment::find($id)->update([
     'status'=>'Paid'
     ]);
     return redirect()->back()->with('message','Payment Confirm'); 
     }

    
}
