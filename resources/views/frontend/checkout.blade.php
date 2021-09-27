@extends('layouts.frontend')

@section('content')
    @include('frontend.includes.nav')

    <div class="checkout-section">
        <h1 class="checkout-heading">Checkout</h1>
        <div class="checkout-form w-form">
          <form id="email-form" action="{{ route('order.store') }}" method="POST" class="checkout">
            @csrf
            <div class="checkout-right-wrap">
              <div class="info-wrap"><label for="Email-2" class="checkout-title">Customer Info</label>
                <label for="Email-3" class="field-label">* Required</label>
            </div>
              <div class="info-wrap-wf"><label for="email" class="field-label">Email *</label>
                <input type="email" id="email" class="input w-input" maxlength="256" name="email" value="{{ Auth::user()->email }}" required></div>
              <div class="info-wrap top-space"><label for="Email-3" class="checkout-title">Shipping Address</label><label for="Email-3" class="field-label">* Required</label></div>
              <div class="info-wrap-wf"><label for="Name" class="field-label">Full Name *</label>
                <input type="text" class="input w-input" id="name" maxlength="256" name="name" value="{{ Auth::user()->name }}" placeholder=""  required>



                <label for="Name-2" class="field-label">Street Address *</label><input type="text" class="input w-input" maxlength="256" name="address" placeholder="" id="address" required="">
                <div class="checkout-grid">
                  <div><label for="Name-4" class="field-label">City *</label><input type="text" class="input w-input" maxlength="256" name="city"  placeholder="" id="city" required=""></div>
                  <div><label for="Name-4" class="field-label">State/Province</label><input type="text" class="input w-input" maxlength="256" name="state"  placeholder="" id="state" required=""></div>
                  <div><label for="Name-4" class="field-label">Zip/Postal Code *</label><input type="text" class="input w-input" maxlength="256" name="zip_code" data-name="Name 2" placeholder="" id="zip_code" required=""></div>
                </div><label for="Name-2" class="field-label">Country *</label><input type="text" class="input w-input" maxlength="256" name="country" placeholder="" id="country" required="">
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



{{-- 
        <div class="info-wrap top-space"><label for="Email-3" class="checkout-title">Payment Info<br></label><label for="Email-3" class="field-label">* Required</label></div>
              <div class="info-wrap-wf"><label for="Name-5" class="field-label">Card Number *</label><input type="text" class="input w-input" maxlength="256" name="Name-3" data-name="Name 3" placeholder="" id="Name-3" required="">
                <div class="checkout-grid-2">
                  <div><label for="Name-5" class="field-label">Expiration Date *</label><input type="text" class="input w-input" maxlength="256" name="Name-2" data-name="Name 2" placeholder="" id="Name-2" required=""></div>
                  <div><label for="Name-5" class="field-label">Security Code *</label><input type="text" class="input w-input" maxlength="256" name="Name-2" data-name="Name 2" placeholder="" id="Name-2" required=""></div>
                </div>
                <label class="w-checkbox payment-checkbox"><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" class="w-checkbox-input"><span class="w-form-label">Billing address same as shipping</span></label>
              </div>  --}}
              <div class="info-wrap top-space"><label for="Email-3" class="checkout-title">Billing Address<br></label><label for="Email-3" class="field-label">* Required</label></div>
              <div class="info-wrap-wf"><label for="Name-4" class="field-label">Full Name *</label><input type="text" class="input w-input" maxlength="256" name="billing_name" placeholder="" id="billing_name" required=""><label for="Name-4" class="field-label">Street Address *</label><input type="text" class="input w-input" maxlength="256" name="billing_address"  placeholder="" id="billing_address" required="">
                <div class="checkout-grid">
                  <div><label for="Name-4" class="field-label">City *</label><input type="text" class="input w-input" maxlength="256" name="billing_city" data-name="Name 2" placeholder="" id="billing_city" required=""></div>
                  <div><label for="Name-4" class="field-label">State/Province</label><input type="text" class="input w-input" maxlength="256" name="billing_state" placeholder="" id="billing_state" required=""></div>
                  <div><label for="Name-4" class="field-label">Zip/Postal Code *</label><input type="text" class="input w-input" maxlength="256" name="billing_zip_code" placeholder="" id="billing_zip_code" required=""></div>
                </div><label for="Name-4" class="field-label">Country *</label><input type="text" class="input w-input" maxlength="256" name="billing_country" placeholder="" id="billing_country" required="">
              </div><label class="w-checkbox payment-checkbox"><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" class="w-checkbox-input"><span class="w-form-label">Billing address same as shipping</span></label>
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

@section('js')
   <script>
     $(document).ready(function(){
      $("#checkbox").change(function(){
        if(this.checked) {
        //Do stuff
    
         let name = $("#name").val();
         let email = $("#email").val(); 
         let address = $("#address").val(); 
         let city   = $("#city").val(); 
         let state   = $("#state").val(); 
         let zip_code = $("#zip_code").val(); 
         let country = $("#country").val(); 

          $("#billing_name").val(name);
          $("#billing_email").val(email);
          $("#billing_address").val(address);
          $("#billing_city").val(city);
          $("#billing_zip_code").val(zip_code);
          $("#billing_country").val(country);
          $("#billing_state").val(state);

        }
        else 
        {
          $("#billing_name").val('');
          $("#billing_email").val('');
          $("#billing_address").val('');
          $("#billing_city").val('');
          $("#billing_zip_code").val('');
          $("#billing_country").val('');
        }

      });
     });  
   </script>
@endsection