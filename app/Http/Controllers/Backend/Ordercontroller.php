<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\order_details;
use Illuminate\Http\Request;

class Ordercontroller extends Controller
{
    public function order()
    {
        $orders=order::paginate(3);
        return view('backend.layouts.orders.order',compact('orders'));
    }
    public function orderdetails($id)

    {  
       
        
            $orders=order_details::where('order_id',$id)->get();
            // dd($orders);
        
    
            return view('backend.layouts.orders.order_details',compact('orders'));
 
    }
    public function invoice($id)
    {
        $orders=order::with('orderDetails','user')->where('id',$id)->first();
        return view('backend.layouts.orders.invoice',compact('orders'));

    }
    public function approve($id,$status)
     {
       $order  = order::find($id);
       if($status=='approved')
       {
           $order->update([
               'status' => $status
           ]);
       }else{
        $order->update([
            'status' => $status
        ]);
       }

     return redirect()->back()->with('message','item order approved sucessfully'); 
     }
    
    
     
    
}
