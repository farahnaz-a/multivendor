<?php 
function cartCount()
{
   return App\Models\Cart::where('ip_address', request()->ip())->count();
}


function cartItems()
{
  return App\Models\Cart::where('ip_address', request()->ip())->get();
}

function cartTotal()
{
    cartItems();
    $sub_total = 0;
    foreach(cartItems() as $item)
    {
        
        if($item->product_id != '')
        {
            $product_price = App\Models\Product::find($item->product_id)->price ;
            $sub_total = $sub_total + ($item->qty * $product_price);
        }
        else 
        {
            $product_price = App\Models\Course::find($item->course_id)->price ;
            $sub_total = $sub_total + ($item->qty * $product_price);
        }

    }
    return $sub_total;
}