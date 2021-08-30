<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\restaurant;

class Restaurantcontroller extends Controller
{
    public function Info()
    {
        $checkInfo=restaurant::first(); 
        // dd($checkInfo);
        return view('backend.layouts.Restaurant.info',compact('checkInfo'));
    }
    public function store( Request $request)
     {

        $checkInfo=restaurant::first();
      
        if($checkInfo)
        {
            //update

            $checkInfo->update([
                'name'=>$request->restaurant_name,
                'address'=>$request->address,
                'email'=>$request->email,
                'password'=>$request->password,
                'city'=>$request->city

            ]);
           
        }else{
          
           restaurant::create([
                'name'=>$request->restaurant_name,
                'address'=>$request->address,
                
                'email'=>$request->email,
                'password'=>$request->password,
                'city'=>$request->city

            ]);
            
        }

      

        return redirect()->back();
     }
}



