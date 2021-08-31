<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function signup()
    {
        return view('frontend.layouts.signup');
        }

        public function signupFormPost(Request $request)
        {
           

            User::create([
               'full_name'=>$request->full_name,
               'phone_number'=>$request->phone_number,
               'email'=>$request->email,
               'address'=>$request-> address,
               'role'=>'customer',
               'password'=>bcrypt($request->customer_email),
            ]);
    
            return redirect()->back()->with('success','User Registration Successful.');
    
        }
}
