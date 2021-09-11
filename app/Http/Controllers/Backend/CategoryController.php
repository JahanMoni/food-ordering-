<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\models\Category;
use App\models\Item;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        
        $categories=Category::paginate(3);
        return view('backend.layouts.categories.category',compact('categories'));
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

        Category::create([
            'name' =>$request->Category_name,
            'details' =>$request->description,
            'image' =>$fileName
        ]); 
        return redirect()->back();
    }
}
public function  delete($id)
        {
         
            $categories=category::find($id);
            if($categories)
            {
                $categories->delete();
                return redirect()->back()->with('message','category  Deleted successfully.');
            }
            return redirect()->back()->with('message','No category found to delete.');
        }
        public function allitem($id)
        {
            $items=item::where('category_id',$id)->get();
    //        $category=Category::with('products')->find($id);//using relationshop
    //        dd($products);
    
            return view('backend.layouts.categories.category-item',compact('items'));
        }
        
    
}
