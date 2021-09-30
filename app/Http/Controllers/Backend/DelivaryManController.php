<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\models\Deliveryman;

use Illuminate\Http\Request;

class DelivaryManController extends Controller
{
    public function list()
        {
            $list=Deliveryman::all();
            return view('backend.layouts.delivarymans.delivaryman',compact('list'));
        }
        public function store(Request $request)
        {
    
            Deliveryman::create([
                
                'name'=>$request->name,
                'phone_number' =>$request->phone_number,
                'email' =>$request->email,
                'password' =>$request->password,
                
            ]);
            return redirect()->back();
    
       }
}
