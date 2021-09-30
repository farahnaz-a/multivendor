<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Cart;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index($coupon_name = "")
    {
       if(cartItems()->count() > 0)
       {
        return view('frontend.cart.index');
       }
       else 
       {
         return back()->withSuccess('Your cart is empty. Please add some products to view the cart');
       }
    }


    public function store(Request $request)
    {
        if($request->product_id)
        {
            if(Cart::where('ip_address', $request->ip())->where('product_id', $request->product_id)->exists())
        {
       
            Cart::where('ip_address', $request->ip())->where('product_id', $request->product_id)->increment('qty', $request->qty);
         
          return redirect()->route('cart.index')->withSuccess('Product Updated to Cart');
        }
        else
        {
         $cart =  Cart::insert([
            'ip_address'  => $request->ip(),
            'qty' => $request->qty,
            'amount' => $request->amount,
            'product_id'  => $request->product_id,
            'course_id'  => $request->course_id,
            'created_at'  => Carbon::now(),
          ]);
          return redirect()->route('cart.index')->withSuccess('Product Added to Cart');
        }
        }
        else 
        {
            if(Cart::where('ip_address', $request->ip())->where('course_id', $request->course_id)->exists())
        {
       
            Cart::where('ip_address', $request->ip())->where('course_id', $request->course_id)->increment('qty', $request->qty);
        
          return redirect()->route('cart.index')->withSuccess('Product Updated to Cart');
        }
        else
        {
         $cart =  Cart::insert([
            'ip_address'  => $request->ip(),
            'qty' => $request->qty,
            'amount' => $request->amount,
            'product_id'  => $request->product_id,
            'course_id'  => $request->course_id,
            'created_at'  => Carbon::now(),
          ]);
          return redirect()->route('cart.index')->withSuccess('Product Added to Cart');
        }
        }
        
    }

    public function delete($cart_id)
    {
      Cart::find($cart_id)->delete();
      return back()->withSuccess('Product Removed From the Cart');
    }

    public function cartUpdate(Request $request)
    {

      foreach ($request->id as $key => $id) {
        Cart::findOrFail($id)->update([
          'qty' => $request->qty[$key],
        ]);
      }
        return back()->withSuccess('Cart Updated');
    }
}
