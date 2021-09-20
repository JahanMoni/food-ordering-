<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class CartController extends Controller
{


     public function cart(){

        $carts = session()->get('cart'); 
        return view('frontend.layouts.cart',compact('carts'));
     }


   
    public function addTocart($id)
    {
        $item = Item::find($id);
    
        if(!$item) {

            abort(404);

        }

        $cart = session()->get('cart');
    

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                    $id => [
                        'id'            => $item->id,
                        "name"          => $item->item_name,
                        "quantity"      => 1,
                        "price"         => $item->price,
                        "total_price"   => $item->price, 
                        "details"       => $item->details,
                        "image"         => $item->image,
                    ]
            ];

            session()->put('cart', $cart);

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
    
    
}
