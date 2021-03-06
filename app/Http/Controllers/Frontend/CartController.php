<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\order;
use App\Models\order_details;
use Illuminate\Http\Request;

class CartController extends Controller
{


     public function cart(){

        $carts = session()->get('cart'); 
        
    
        return view('frontend.layouts.cart',compact('carts'));
     }
     public function clear()
    {
        session()->forget('cart');
        return redirect()->back();
    }


    public function delete($id)
        {
        //  dd($id);
            $cart=session('cart');
           
            unset($cart[$id]);
            session()->put('cart',$cart);
            return redirect()->back()->with('message','item Deleted successfully.');
            
            
        }

    
   
    public function addTocart($id)
    {
        $item = Item::find($id);
    
        if(!$item) {

            abort(404);

        }

        $cart = session()->get('cart');
    

        // if cart is empty then this the first item
        if(!$cart) {

            $cart = [
                    $id => [
                        'id'            => $item->id,
                        "name"          => $item->item_name,
                        "quantity"      => 1,
                        "price"         => $item->price,
                        "total_price"   => $item->price * $item->quantity, 
                        "details"       => $item->details,
                        "image"         => $item->image,
                    ]
            ];

            session()->put('cart', $cart);
            // dd($cart);

            return redirect()->back()->with('success', 'item added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;
            $cart[$id]['total_price'] = $cart[$id]['quantity'] * $cart[$id]['price'];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
                        'id'            => $item->id,
                        "name"          => $item->item_name,
                        "quantity"      => 1,
                        "price"         => $item->price,
                        "total_price"   => $item->price, 
                        "details"       => $item->details,
                        "image"         => $item->image,
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    
    public function checkoutshow()
    {
         return view ('frontend.layouts.checkout');
     }

     public function orderlist(Request $request)
    {
         
    
        $carts = session('cart');

    
       $order=order:: Create([
        
             'user_id'=>auth()->user()->id,
             'receiver_name'=>$request->full_name,
             'receiver_email'=>$request->receiver_email,
             'receiver_phone_number'=>$request->phone_number,
             'receiver_address'=>$request->address,
             'total_payment'=>array_sum(array_column($carts,'total_price'))
            

       ]);

       foreach ($carts as $item)
       {
               order_details::create([
                'user_id'=>auth()->user()->id,
               'order_id'=>$order->id,
               'item_name'=>$item['name'],
               'unit_price'=>$item['price'],
               'quantity'=>$item['quantity'],
               'sub_total'=>$item['price'] * $item['quantity'],
           ]);
           
       }
       session()->forget('cart');
    //    return redirect()->back();

       
       

       return redirect()->route('home')->with('success','order successfully.');
    }

     
     
    
    
}
