<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Registrationcontroller extends Controller
{
    public function registration()
    {
        return view('backend.layouts.registrations.registration');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        Registresion::create([
           
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'phone'=>$request->phone,
            
           
        ]);
        return redirect()->back();
    }
}
