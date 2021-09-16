<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signup()
    {
        return view('frontend.layouts.signup');
        }

        public function signupFormPost(Request $request)
        {

          
           $request->validate([
            'full_name'=>'required',
            'phone_number'=>'required',
            'email'=>'required|email|unique:users',
            'address'=>'required',
            
            'password'=>'required|min:6'
           
        ]);

            User::create([
               'full_name'=>$request->full_name,
               'phone_number'=>$request->phone_number,
               'email'=>$request->email,
               'address'=>$request->address,
               'action'=>$request->action,
               'status'=>$request->status,
               'role'=>'customer',
               'password'=>bcrypt($request->password),
            ]);
    
            return redirect()->back()->with('success','User Registration Successfully.');
            
    

        }
        public function login()
        {
            return view('frontend.layouts.login');
        }
    
        public function doLogin(Request $request)
        {
            $credentials=$request->except('_token');
    
            if(Auth::attempt($credentials))
            {
                
                return redirect()->route('home');
              
            }
            return redirect()->back()->with('message','invalid user info.');
        }
    
        public function logout()
        {
            Auth::logout();
            return redirect()->route('customer.login');
        }
}
