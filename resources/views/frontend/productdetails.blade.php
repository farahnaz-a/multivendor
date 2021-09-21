@extends('layouts.frontend')

@section('content')
    @include('frontend.includes.nav')
    <div class="product-section">
        <div class="wrapper">
          <div class="single-product-wrap">
            <div class="left-product-block">
              <div class="single-image-wrap"><img src="{{ asset('uploads/products') }}/{{ $product->image }}" loading="lazy" alt="" class="single-product-image"></div>
              <div class="more-image-wrap">
                @if(Route::is('product.details'))
                @foreach ($product->get_multiple_images as $item)
                <a href="#" class="more-link-block w-inline-block"><img src="{{ asset('uploads/multiple_images') }}/{{ $item->image }}" loading="lazy" alt="" class="more-image"></a>
                @endforeach
                @endif
              </div>
            </div>
            <div class="right-product-block">
              <div class="prodoct-info">
                <div class="product-name">
                    @if(Route::is('product.details'))
                    {{ $product->title }}
                    @else 
                    {{ $product->name }}
                    @endif
                </div>
              </div>
              <p class="about-product">
                  {{ $product->description }}
              </p>
              <div class="form-block-3 w-form">
                <form id="email-form-3" name="email-form-3" data-name="Email Form 3" class="quantity-wrap gap"><label for="name-2" class="text">Quantity : </label><input type="number" class="quantity-number w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="" id="name-2" required=""></form>
                <div class="w-form-done">
                  <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
              <div class="quantity">
                <div class="quantity-text">Subject:</div>
                <div class="text-block">
                    @if(Route::is('product.details'))
                    {{ $product->getSubCategory->name }}
                    @else 
                    {{ $product->category }}
                    @endif
                </div>
              </div>
              <div class="single-price">{{ $product->price }} €</div>
              <a href="cart.html" class="cart-button top-gap w-button">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
@endsection