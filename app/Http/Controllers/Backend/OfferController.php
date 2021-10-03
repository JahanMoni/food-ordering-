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
        'discount_price' =>$request->discount_price,
       'expire_date'=>$request->expire_date
        
       
    ]);
    return redirect()->back();

        }
    }
    public function  delete($id)
    {
     
        $Offer=Offer::find($id);
        if($Offer)
        {
            $Offer->delete();
            return redirect()->back()->with('message','item Deleted successfully.');
        }
        return redirect()->back()->with('message','No item found to delete.');
    }
    
}
