<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\order_details;
use App\Models\User;
use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    public function myprofile() 
    {
        $orders=order_details::all();
        $orders=order::where('user_id',auth()->user()->id)->get();
        $users=User::all();
        return view('frontend.layouts.myprofile',compact('orders','users'));

    }
    
    
         public function Cancel($id)
        {
            order::find($id)->update([
        'status'=>'cancel'
        ]);
        return redirect()->back()->with('message','item cancel sucessfully'); 
        }
    
     
}
