<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\customer;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        
        return view('backend.layouts.login');
    }
    
    public function loginPost(Request $request)
    {
        $credentials=$request->except('_token');

        if(Auth::attempt($credentials))
        {
        // dd(auth()->user());
            if(auth()->user()->role=='admin' || auth()->user()->role=='manager')
            {
                
            return redirect()->route('dashboard.dash');
            }
        }
        else
           {
               Auth::logout();
               return redirect()->route('User.signup');
           }

        return redirect()->back()->with('message','invalid user info.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
    
    public function customer()
    {
        
        $customers=user::where('role','=','customer')->get();
        return view('backend.layouts.customers.customer',compact('customers'));
    }
    public function userList()
    {
        $user=User::paginate(3);
        return view('backend.layouts.user.list', compact('user'));
    }
    public function viewuser($id)
    {
        $users=user::find($id);
        return view('backend.layouts.user.viewuser',compact('users'));
    }
    public function  delete($id)
    {
     
        $users=user::find($id);
        if( $users)
        {
            $users->delete();
            return redirect()->back()->with('message','item Deleted successfully.');
        }
        return redirect()->back()->with('message','No item found to delete.');
    }
    
}