<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function offer()
    {
        $Offer=Offer::all();
     
        return view('backend.layouts.offers.offer',compact('Offer'));
    }
    public function store(Request $request)
    {
        {
            $fileName='';
        if($request->hasFile('image'))
        {
           $file=$request->file('image');
           $fileName=date('Ymdms').'.'.$file->getClientOriginalExtension();
           $file->storeAs('/uploads',$fileName);
        }

        
        
        }
        {
        Offer::create([
        'user_id'=>auth()->user()->id,
        'item_name'=>$request->Item_name,
        'image' =>$fileName,
        'price' =>$request->price,
       'expire_date'=>$request->expire_date
        
       
    ]);
    return redirect()->back();

        }
    }
    
}
