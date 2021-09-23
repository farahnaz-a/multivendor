<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\Course;
use App\Models\Order_list;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('verified');
    }
    public function index(Request $request)
    {

        return view('frontend.checkout');
    }

    public function order(Request $request)
    {
     
            // $request->validate([
            //     'first_name' => 'required',
            //     'last_name'  => 'required',
            //     'email'      => 'required', 
            //     'phone'      => 'required',
            //     'address'         => 'required',
            //     'zip_code'        => 'required',
            //     'country'         => 'required',
            //     'city'            => 'required', 
            // ]);
    
            $order = Order::create($request->except('_token') + ['user_id' => Auth::id() ?? 0, 'created_at' => Carbon::now()]);

            
            foreach(cartItems() as $item)
            {
                Order_list::insert([
                    'order_id'   => $order->id,
                    'user_id'    => Auth::id() ?? 0,
                    'product_id' => $item->product_id,
                    'amount'     => $item->cart_amount,
                    'created_at' => Carbon::now(),
                    'size'       => $item->size,
                    'color'      => $item->color,
                ]);

              Product::where('id', $item->product_id)->decrement('quantity', $item->cart_amount);    
              Cart::find($item->id)->delete();
            }
            return redirect('/')->withSuccess('Order have been placed. We will get in touch with you as soon as possible');
    }
}
