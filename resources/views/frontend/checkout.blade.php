@extends('layouts.frontend')

@section('content')
    @include('frontend.includes.nav')

    <div class="checkout-section">
        <h1 class="checkout-heading">Checkout</h1>
        <div class="checkout-form w-form">
          <form id="email-form" name="email-form" data-name="Email Form" class="checkout">
            <div class="checkout-right-wrap">
              <div class="info-wrap"><label for="Email-2" class="checkout-title">Customer Info</label>
                <label for="Email-3" class="field-label">* Required</label>
            </div>
              <div class="info-wrap-wf"><label for="email" class="field-label">Email *</label>
                <input type="email" class="input w-input" maxlength="256" name="email" value="{{ Auth::user()->email }}" required></div>
              <div class="info-wrap top-space"><label for="Email-3" class="checkout-title">Shipping Address</label><label for="Email-3" class="field-label">* Required</label></div>
              <div class="info-wrap-wf"><label for="Name" class="field-label">Full Name *</label>
                <input type="text" class="input w-input" maxlength="256" name="name" value="{{ Auth::user()->name }}" placeholder="" id="Name" required>
                <label for="Name-2" class="field-label">Street Address *</label><input type="text" class="input w-input" maxlength="256" name="Name-3" data-name="Name 3" placeholder="" id="Name-3" required="">
                <div class="checkout-grid">
                  <div><label for="Name-4" class="field-label">City *</label><input type="text" class="input w-input" maxlength="256" name="Name-2" data-name="Name 2" placeholder="" id="Name-2" required=""></div>
                  <div><label for="Name-4" class="field-label">State/Province</label><input type="text" class="input w-input" maxlength="256" name="Name-2" data-name="Name 2" placeholder="" id="Name-2" required=""></div>
                  <div><label for="Name-4" class="field-label">Zip/Postal Code *</label><input type="text" class="input w-input" maxlength="256" name="Name-2" data-name="Name 2" placeholder="" id="Name-2" required=""></div>
                </div><label for="Name-2" class="field-label">Country *</label><input type="text" class="input w-input" maxlength="256" name="Name-2" data-name="Name 2" placeholder="" id="Name-2" required="">
              </div>

              {{-- <div class="info-wrap top-space"><label for="Email-3" class="checkout-title">Shipping Method</label></div>
              <div class="shipping"><label class="w-radio"><input type="radio" data-name="Radio" id="radio" name="radio" value="Radio" class="w-form-formradioinput w-radio-input"><span class="w-form-label">Standard flat rate for all shipments.</span></label>
                <div class="price">18.90 €</div>
              </div>
              <div class="shipping"><label class="w-radio"><input type="radio" data-name="Radio 3" id="radio-3" name="radio" value="Radio" class="w-form-formradioinput w-radio-input"><span class="w-form-label">Standard flat rate for all shipments.</span></label>
                <div class="price">18.90 €</div>
              </div>
              <div class="shipping"><label class="w-radio"><input type="radio" data-name="Radio 2" id="radio-2" name="radio" value="Radio" class="w-form-formradioinput w-radio-input"><span class="w-form-label">Standard flat rate for all shipments.</span></label>
                <div class="price">18.90 €</div>
              </div> --}}




              <div class="info-wrap top-space"><label for="Email-3" class="checkout-title">Payment Info<br></label><label for="Email-3" class="field-label">* Required</label></div>
              <div class="info-wrap-wf"><label for="Name-5" class="field-label">Card Number *</label><input type="text" class="input w-input" maxlength="256" name="Name-3" data-name="Name 3" placeholder="" id="Name-3" required="">
                <div class="checkout-grid-2">
                  <div><label for="Name-5" class="field-label">Expiration Date *</label><input type="text" class="input w-input" maxlength="256" name="Name-2" data-name="Name 2" placeholder="" id="Name-2" required=""></div>
                  <div><label for="Name-5" class="field-label">Security Code *</label><input type="text" class="input w-input" maxlength="256" name="Name-2" data-name="Name 2" placeholder="" id="Name-2" required=""></div>
                </div><label class="w-checkbox payment-checkbox"><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" class="w-checkbox-input"><span class="w-form-label">Billing address same as shipping</span></label>
              </div>
              <div class="info-wrap top-space"><label for="Email-3" class="checkout-title">Billing Address<br></label><label for="Email-3" class="field-label">* Required</label></div>
              <div class="info-wrap-wf"><label for="Name-4" class="field-label">Full Name *</label><input type="text" class="input w-input" maxlength="256" name="Name-3" data-name="Name 3" placeholder="" id="Name-3" required=""><label for="Name-4" class="field-label">Street Address *</label><input type="text" class="input w-input" maxlength="256" name="Name-3" data-name="Name 3" placeholder="" id="Name-3" required=""><input type="text" class="input w-input" maxlength="256" name="Name-3" data-name="Name 3" placeholder="" id="Name-3" required="">
                <div class="checkout-grid">
                  <div><label for="Name-4" class="field-label">City *</label><input type="text" class="input w-input" maxlength="256" name="Name-2" data-name="Name 2" placeholder="" id="Name-2" required=""></div>
                  <div><label for="Name-4" class="field-label">State/Province</label><input type="text" class="input w-input" maxlength="256" name="Name-2" data-name="Name 2" placeholder="" id="Name-2" required=""></div>
                  <div><label for="Name-4" class="field-label">Zip/Postal Code *</label><input type="text" class="input w-input" maxlength="256" name="Name-2" data-name="Name 2" placeholder="" id="Name-2" required=""></div>
                </div><label for="Name-4" class="field-label">Country *</label><input type="text" class="input w-input" maxlength="256" name="Name-3" data-name="Name 3" placeholder="" id="Name-3" required=""><label class="w-checkbox payment-checkbox"><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input"><span class="w-form-label">Billing address same as shipping</span></label>
              </div>
            </div>
            <div class="checkout-left-wrap">
              <div class="div-block">
                <div class="info-wrap gap"><label for="Email-3" class="checkout-title">Items in Order<br></label></div>
                <div class="cart-items-wrap">
                  @foreach(cartItems() as $key => $item)
                  <div class="cart-product">
                    <div>
                      <div class="cart-image-wrap"><img src="
                        @if($item->product_id)
                        {{ asset('uploads/products') }}/{{ $item->getproducts->image }}
                        @else 
                        {{ asset('uploads/course/thumbnail') }}/{{ $item->getcourse->thumbnail }}
                        @endif
                        " loading="lazy" sizes="65px" srcset="@if($item->product_id)
                        {{ asset('uploads/products') }}/{{ $item->getproducts->image }}
                        @else 
                        {{ asset('uploads/course/thumbnail') }}/{{ $item->getcourse->thumbnail }}
                        @endif 500w,          @if($item->product_id)
                        {{ asset('uploads/products') }}/{{ $item->getproducts->image }}
                        @else 
                        {{ asset('uploads/course/thumbnail') }}/{{ $item->getcourse->thumbnail }}
                        @endif" alt="" class="cart-product-image cart">
                        <div><label for="Email-3" class="field-label"><strong>{{ ($item->product_id) ? $item->getproducts->title : $item->getcourse->name }}</strong><br></label>
                          <div class="number-wrap">
                            <div class="quantity-text">Quantity:</div>
                            <div>{{ $item->qty }}</div>
                          </div>
                          <div class="number-wrap">
                            <div class="quantity-text">Subject:</div>
                            <div>{{ ($item->product_id) ? $item->getproducts->getSubCategory->name : $item->getcourse->category }}</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price">{{ ($item->product_id) ? $item->getproducts->price : $item->getcourse->price }} €</div>
                  </div>
                  @endforeach
                </div>
                <div class="info-wrap top-space"><label for="Email-3" class="checkout-title">Order Summary<br></label></div>
                <div class="total-wrap"><label for="Email-3" class="field-label">Subtotal<br></label><label for="Email-3" class="field-label">{{ cartTotal() }}.00 €</label></div>
                <div class="total-wrap"><label for="Email-3" class="field-label">Shipping Charge<br></label><label for="Email-3" class="field-label">16 €</label></div>
                <div class="total-wrap"><label for="Email-3" class="checkout-title">Total<br></label><label for="Email-3" class="total-price">{{ cartTotal() + 16 }}.02 €</label></div><input type="submit" value="Submit" data-wait="Please wait..." class="check-out-submit w-button">
              </div>
            </div>
          </form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>

@endsection