<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserItemController extends Controller
{
    public function item()
    {
        return view('frontend.layouts.item');
    }
}
