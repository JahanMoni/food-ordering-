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
        $items=Item::with('category')->paginate(5);
        
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
                'category_id' =>$request->category_name,
                
                'image' =>$fileName,
                'price' =>$request->price,
                'details' =>$request->details
            
            ]); 
            return redirect()->back();
        }
    }
   

        public function  delete($id)
        {
         
            $items=Item::find($id);
            if($items)
            {
                $items->delete();
                return redirect()->back()->with('message','item Deleted successfully.');
            }
            return redirect()->back()->with('message','No item found to delete.');
        }
        public function edit($id)
        {
            $items=Item::find($id);
            return view('backend.layouts.items.updateitem',compact('items'));

        }
        public function update(Request $request,$id)
        {
            {
                $fileName='';
            if($request->hasFile('image'))
            {
               $file=$request->file('image');
               $fileName=date('Ymdms').'.'.$file->getClientOriginalExtension();
               $file->storeAs('/uploads',$fileName);
    
            
            
            }
            $items=Item::find($id);
            $items->update([
                'item_name' =>$request->Item_name,
                'price' =>$request->price,
                'details' =>$request->details
               
            ]); 

            return redirect()->route('categories.category')->with('message','item updated successfully.');

        }
    }
        

}
