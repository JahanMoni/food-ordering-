<?php

namespace App\Http\Controllers\userpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class timecontroller extends Controller
{
    
    public function time(){
        return view('userpage.time');
    }
}