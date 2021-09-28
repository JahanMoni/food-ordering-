<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function offer()
    {
      
       $offer=Offer::all();
        
       return view('frontend.layouts.offer',compact('offer'));
    }
    public function offerview($id)
    {
        
       
        $offerview=Offer::find($id);
    
        return view('frontend.layouts.itemview',compact('offerview'));
    }
    
}
