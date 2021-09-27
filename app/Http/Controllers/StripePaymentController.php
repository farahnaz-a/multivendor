<?php

namespace App\Http\Controllers;

use Stripe;
use App\Models\Order;
use Illuminate\Http\Request;
use Session;

class StripePaymentController extends Controller
{
    /**
     *  Constructor 
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
     /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */

  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        $order = Order::find($request->id);
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $order->total * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from adwareton" 
        ]);

        $order->status = 'processing'; 
        $order->save();
          
        return redirect('/')->withSuccess('Payment is processed. Thank you');
    }
}
