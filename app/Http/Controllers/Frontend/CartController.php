<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    
   
        public function cart()
        {
            
            return view('frontend.layouts.cart');
        } 
    
    
}
