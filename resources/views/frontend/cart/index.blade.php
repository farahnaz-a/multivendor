@extends('layouts.frontend')

@section('content')
@include('frontend.includes.nav')
<div class="product-section">
    <div class="cart-wrapper">
      <div class="cart-wrap">
        <div class="cart-info">
          <div class="cart-title">Your Cart</div>
        </div>

        @foreach (cartItems() as $key => $item)
        <div class="products {{ ($key == 0) ? '' : 'top-border' }}">
            <div class="cart-image-wrap"><img src="
                @if($item->product_id)
                {{ asset('uploads/products') }}/{{ $item->getproducts->image }}
                @else 
                {{ asset('uploads/course/thumbnail') }}/{{ $item->getcourse->thumbnail }}
                @endif
                " loading="lazy" sizes="65px" srcset="  @if($item->product_id)
                {{ asset('uploads/products') }}/{{ $item->getproducts->image }}
                @else 
                {{ asset('uploads/course/thumbnail') }}/{{ $item->getcourse->thumbnail }}
                @endif 500w,   @if($item->product_id)
                {{ asset('uploads/products') }}/{{ $item->getproducts->image }}
                @else 
                {{ asset('uploads/course/thumbnail') }}/{{ $item->getcourse->thumbnail }}
                @endif 512w" alt="" class="cart-product-image cart">
              <div>
                <div>{{ ($item->product_id) ? $item->getproducts->title : $item->getcourse->name }}</div>
                <div class="single-price">{{ ($item->product_id) ? $item->getproducts->price : $item->getcourse->price }} €</div>
                <div class="quantity">
                  <div class="quantity-text">Subject:</div>
                  <div>{{ ($item->product_id) ? $item->getproducts->getSubCategory->name : $item->getcourse->category }}</div>
                </div>
                <div class="remove">
                  <a href="{{ route('cart.delete', $item->id) }}" class="remove-link">Remove</a>
                </div>
              </div>
            </div>
            <div class="quantity-cart-wrap">
              <div class="w-form">
                <form action="{{ route('cart.custom.update') }}" method="POST">
                    @csrf
                    <input type="number" class="quantity-block w-input" maxlength="256" name="qty[]" value="{{ $item->qty }}">
                <div class="w-form-done">
                  <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
            </div>
          </div>
        @endforeach

            <input type="hidden" name="id[]" value="{{ $item->id }}">
            <a href="{{ route('cart.custom.update') }}" onclick="event.preventDefault();this.closest('form').submit();" class="continue-button w-button" style="margin:20px 0;">Update cart</a>
        </form>

        <div class="cart-subtotal">
          <div>Subtotal</div>
          <div>{{ cartTotal() }}.00 €</div>
        </div>
        @if(cartItems()->count() > 0)
        <div class="button-box">
            <a href="{{ route('checkout.index') }}" class="continue-button w-button">Continue to Checkout</a>
          </div>
        @endif
      </div>
    </div>
  </div>
@endsection