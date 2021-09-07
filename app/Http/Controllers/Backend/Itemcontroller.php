<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

class Itemcontroller extends Controller
{
    public function Item()
    {
        $items=Item::with('category')->paginate(3);
        //        dd($products);
              

        $categories=Category::all();
        return view('backend.layouts.items.item',compact('items','categories'));
    }
        public function store(Request $request)
        {
            $fileName='';
        if($request->hasFile('image'))
        {
           $file=$request->file('image');
           $fileName=date('Ymdms').'.'.$file->getClientOriginalExtension();
           $file->storeAs('/uploads',$fileName);

        
        
        }

        {
            Item::create([
                'item_name' =>$request->Item_name,
                'category_name' =>$request->category_name,
                
                'image' =>$fileName,
                'price' =>$request->price,
                'details' =>$request->details
            
            ]); 
            return redirect()->back();
        }

}
}