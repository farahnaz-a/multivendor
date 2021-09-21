@extends('layouts.frontend')

@section('content')

      <h1 class="title">Bijscholing Medische Trainingen en Cursussen</h1>
      <div data-delay="2000" data-animation="slide" data-autoplay="1" data-duration="500" data-infinite="1" class="slider w-slider">
        <div class="mask w-slider-mask">
           @foreach (\App\Models\Course::latest()->get() as $item)
           <div class="slide w-slide">
            <div class="div-put">
              <div class="blue">
                <div class="video-wrap">
                  <div style="" class="slide-video w-video w-embed">
                    <a href="{{ route('course.details', $item->id) }}"><img src="{{ asset('uploads/course/thumbnail') }}/{{ $item->thumbnail }}" alt=""></a>
                  </div>
                  <h3>{{ $item->name }}</h3>
                  <a href="#" class="button top-margin w-inline-block">
                    <div class="button-wrap">
                      <div>Direct verder met bestellen</div>
                    </div>
                  </a>
                </div>
                {{--  <div class="plan-wrap">
                  <div class="left-block">
                    <div class="plan-name">Basis</div>
                    <div class="price-text">max. <span class="price">$10</span> p/mo</div>
                    <div class="plan-name top-space">plus</div>
                    <div class="price-text">max. <span class="price">$20</span> p/mo</div>
                  </div>
                  <div class="right-block">
                    <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adsem vitae risus tristique posuere.</p>
                  </div>
                </div>  --}}
              </div>
            </div>
          </div>
           @endforeach
        </div>
        <div class="left-arrow w-slider-arrow-left">
          <div class="w-icon-slider-left"></div>
        </div>
        <div class="right-arrow w-slider-arrow-right">
          <div class="w-icon-slider-right"></div>
        </div>
        <div class="slide-nav w-slider-nav w-round"></div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="wrapper">
      <h1 class="title">Book een Mentor of Book een Intekgesprek voor een Medisch behandeling</h1>
      <div data-delay="2000" data-animation="slide" data-autoplay="1" data-duration="500" data-infinite="1" class="slider w-slider">
        <div class="booking-mask-dr w-slider-mask">
          <div class="slide w-slide">
            <div class="booking-block">
              <div class="booking-wrap">
                <div class="flex">
                    
                  <div class="left-block"><img src="{{ asset('frontend_assets/images/DTR2.jpg') }}" loading="lazy" alt="" class="image"></div>
                  <div class="right-block">
                    <div>Mandy van Leeuwen Verloskundige</div>
                    <div class="information-wrap"><img src="{{ asset('frontend_assets/images/check-mark.svg') }}" loading="lazy" alt="" class="information-image">
                      <div>Book een Mentor ter voorbereiding van tentamens.</div>
                    </div>
                    <div class="information-wrap"><img src="{{  asset('frontend_assets/images/empty.svg') }}" loading="lazy" alt="" class="information-image">
                      <div>Book een Mentor ter voorbereiding van tentamens.</div>
                    </div>
                    <a href="#" class="button top-margin w-inline-block">
                      <div class="booking-button">
                        <div>Bestel</div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="slide w-slide">
            <div class="booking-block">
              <div class="booking-wrap">
                <div class="flex">
                    
                  <div class="left-block"><img src="{{ asset('frontend_assets/images/DTR3.jpg') }}" loading="lazy" alt="" class="image"></div>
                  <div class="right-block">
                    <div>Mandy van Leeuwen Verloskundige</div>
                    <div class="information-wrap"><img src="{{ asset('frontend_assets/images/check-mark.svg') }}" loading="lazy" alt="" class="information-image">
                      <div>Book een Mentor ter voorbereiding van tentamens.</div>
                    </div>
                    <div class="information-wrap"><img src="{{ asset('frontend_assets/images/empty.svg') }}" loading="lazy" alt="" class="information-image">
                      <div>Book een Mentor ter voorbereiding van tentamens.</div>
                    </div>
                    <a href="#" class="button top-margin w-inline-block">
                      <div class="booking-button">
                        <div>Bestel</div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="slide w-slide">
            <div class="booking-block">
              <div class="booking-wrap">
                <div class="flex">
                    
                  <div class="left-block"><img src="{{ asset('frontend_assets/images/DTR.jpg') }}" loading="lazy" alt="" class="image"></div>
                  <div class="right-block">
                    <div>Mandy van Leeuwen Verloskundige</div>
                    <div class="information-wrap"><img src="{{ asset('frontend_assets/images/check-mark.svg') }}" loading="lazy" alt="" class="information-image">
                      <div>Book een Mentor ter voorbereiding van tentamens.</div>
                    </div>
                    <div class="information-wrap"><img src="{{ asset('frontend_assets/images/empty.svg') }}" loading="lazy" alt="" class="information-image">
                      <div>Book een Mentor ter voorbereiding van tentamens.</div>
                    </div>
                    <a href="#" class="button top-margin w-inline-block">
                      <div class="booking-button">
                        <div>Bestel</div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="slide w-slide">
            <div class="booking-block">
              <div class="booking-wrap">
                <div class="flex">
                    
                  <div class="left-block"><img src="{{ asset('frontend_assets/images/DTR4.jpg') }}" loading="lazy" alt="" class="image"></div>
                  <div class="right-block">
                    <div>Mandy van Leeuwen Verloskundige</div>
                    <div class="information-wrap"><img src="{{ asset('frontend_assets/images/check-mark.svg') }}" loading="lazy" alt="" class="information-image">
                      <div>Book een Mentor ter voorbereiding van tentamens.</div>
                    </div>
                    <div class="information-wrap"><img src="{{ asset('frontend_assets/images/empty.svg') }}" loading="lazy" alt="" class="information-image">
                      <div>Book een Mentor ter voorbereiding van tentamens.</div>
                    </div>
                    <a href="#" class="button top-margin w-inline-block">
                      <div class="booking-button">
                        <div>Bestel</div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="slide w-slide">
            <div class="booking-block">
              <div class="booking-wrap">
                <div class="flex">
                    
                  <div class="left-block"><img src="{{ asset('frontend_assets/images/DTR1.jpg') }}" loading="lazy" alt="" class="image"></div>
                  <div class="right-block">
                    <div>Mandy van Leeuwen Verloskundige</div>
                    <div class="information-wrap"><img src="{{ asset('frontend_assets/images/check-mark.svg') }}" loading="lazy" alt="" class="information-image">
                      <div>Book een Mentor ter voorbereiding van tentamens.</div>
                    </div>
                    <div class="information-wrap"><img src="{{ asset('frontend_assets/images/empty.svg') }}" loading="lazy" alt="" class="information-image">
                      <div>Book een Mentor ter voorbereiding van tentamens.</div>
                    </div>
                    <a href="#" class="button top-margin w-inline-block">
                      <div class="booking-button">
                        <div>Bestel</div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="left-arrow w-slider-arrow-left">
          <div class="w-icon-slider-left"></div>
        </div>
        <div class="right-arrow w-slider-arrow-right">
          <div class="w-icon-slider-right"></div>
        </div>
        <div class="slide-nav w-slider-nav w-round"></div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="wrapper">
      <h1 class="title">Apotheek &amp; Huidverzorgings producten</h1>
      <div class="w-layout-grid pharmacy-grid">
          
        @foreach (\App\Models\Product::latest()->get() as $item)
        <div id="w-node-_4bf80b5b-c606-6ec9-1843-c31bd77ef141-2e828b5d" class="grid-block">
          <a href="{{ route('product.details', $item->id) }}">
            <img src="{{ asset('uploads/products') }}/{{ $item->image }}" loading="lazy" alt="" class="medicine">
          </a>
          <a href="" class="button green w-inline-block">
            <div class="cart-button-wrap"><img src="{{ asset('frontend_assets/images/shopping-cart-1.svg') }}" loading="lazy" alt="" class="cart">
              <div>In winkelwagen</div>
            </div>
          </a>
        </div>
        @endforeach
        {{--  <div id="w-node-_34a62009-c4b8-b083-9720-3374a5fda029-2e828b5d" class="grid-block"><img src="{{ asset('frontend_assets/images/PL1.jpg') }}" loading="lazy" alt="" class="medicine">
          <a href="#" class="button green w-inline-block">
            <div class="cart-button-wrap"><img src="{{ asset('frontend_assets/images/shopping-cart-1.svg') }}" loading="lazy" alt="" class="cart">
              <div>In winkelwagen</div>
            </div>
          </a>
        </div>
        
        <div id="w-node-_6484b882-5379-8428-e7d0-5c47159a46fc-2e828b5d" class="grid-block"><img src="{{ asset('frontend_assets/images/PL3.jpg') }}" loading="lazy" alt="" class="medicine">
          <a href="#" class="button green w-inline-block">
            <div class="cart-button-wrap"><img src="{{ asset('frontend_assets/images/shopping-cart-1.svg') }}" loading="lazy" alt="" class="cart">
              <div>In winkelwagen</div>
            </div>
          </a>
        </div>
        <div id="w-node-_7820ac26-6b16-19e7-97ca-9a56ae52bebf-2e828b5d" class="grid-block"><img src="{{ asset('frontend_assets/images/PL1.jpg') }}" loading="lazy" alt="" class="medicine">
          <a href="#" class="button green w-inline-block">
            <div class="cart-button-wrap"><img src="{{ asset('frontend_assets/images/shopping-cart-1.svg') }}" loading="lazy" alt="" class="cart">
              <div>In winkelwagen</div>
            </div>
          </a>
        </div>
        <div id="w-node-_69949ffb-8eea-7db8-1e6b-a03ea707d1ee-2e828b5d" class="grid-block"><img src="{{ asset('frontend_assets/images/PL2.jpg') }}" loading="lazy" alt="" class="medicine">
          <a href="#" class="button green w-inline-block">
            <div class="cart-button-wrap"><img src="{{ asset('frontend_assets/images/shopping-cart-1.svg') }}" loading="lazy" alt="" class="cart">
              <div>In winkelwagen</div>
            </div>
          </a>
        </div>  --}}
        {{--  <div class="grid-block"><img src="{{ asset('frontend_assets/images/PL3.jpg') }}" loading="lazy" alt="" class="medicine">
          <a href="#" class="button green w-inline-block">
            <div class="cart-button-wrap"><img src="{{ asset('frontend_assets/images/shopping-cart-1.svg') }}" loading="lazy" alt="" class="cart">
              <div>In winkelwagen</div>
            </div>
          </a>
        </div>  --}}
      </div>
    </div>
  </div>
  <div class="section bottom-gap">
    <div class="wrapper">
      <h4 class="footer-title">Advertenties</h4>
      <div class="w-layout-grid footer-grid">
        <div class="grid-item">
          <div class="image-block"><img src="{{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope.jpg') }}" loading="lazy" sizes="(max-width: 479px) 94vw, (max-width: 767px) 96vw, (max-width: 1439px) 34vw, 409.5px" srcset="{{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-500.jpeg') }} 500w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-800.jpeg') }} 800w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-1080.jpeg') }} 1080w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-1600.jpeg') }} 1600w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-2000.jpeg') }} 2000w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-2600.jpeg') }} 2600w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope.jpg') }} 3037w" alt=""></div>
          <div class="footer-detail-wrapper">
            <div class="footer-heading">Wij zoeken een loborant.</div>
            <div class="footer-details-block">
              <div class="call-text">Call to action.</div>
              <p class="call-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. </p>
            </div>
            <div class="form-block w-form">
              <form id="email-form" name="email-form" data-name="Email Form" class="form"><select id="Message-Page" name="Message-Page" data-name="Message Page" class="input-block w-select">
                  <option value="">Message Page</option>
                  <option value="First">First Choice</option>
                  <option value="Second">Second Choice</option>
                  <option value="Third">Third Choice</option>
                </select><label for="name" class="text-field">Your Name :</label><input type="text" class="input-block w-input" maxlength="256" name="name" data-name="Name" placeholder="" id="name"><label for="email" class="text-field">Email Address:</label><input type="email" class="input-block w-input" maxlength="256" name="email" data-name="Email" placeholder="" id="email" required=""><label class="text-field">Geef hier uw beschikbaarheid aan</label>
                <div class="timeframe-image-block"><img src="{{ asset('frontend_assets/images/calendar.svg') }}" loading="lazy" alt="" class="form-image"><img src="{{ asset('frontend_assets/images/watch.svg') }}" loading="lazy" alt="" class="form-image"></div><select id="File-Upload" name="File-Upload" data-name="File Upload" class="input-block w-select">
                  <option value="">File Upload CV</option>
                  <option value="First">First Choice</option>
                  <option value="Second">Second Choice</option>
                  <option value="Third">Third Choice</option>
                </select><label for="Description" class="text-field">Description</label><textarea placeholder="Schriif een korte motivatiebrief" maxlength="5000" id="Description" name="Description" data-name="Description" class="textarea w-input"></textarea><input type="submit" value="Submit" data-wait="Please wait..." class="submit-button w-button">
              </form>
              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
          </div>
        </div>
        <div class="grid-item">
            
          <div class="image-block"><img src="{{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope.jpg') }}" loading="lazy" sizes="(max-width: 479px) 94vw, (max-width: 767px) 96vw, (max-width: 1439px) 34vw, 409.5px" srcset="{{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-500.jpeg') }} 500w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-800.jpeg') }} 800w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-1080.jpeg') }} 1080w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-1600.jpeg') }} 1600w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-2000.jpeg') }} 2000w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-2600.jpeg') }} 2600w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope.jpg') }} 3037w" alt=""></div>
          <div class="footer-detail-wrapper">
            <div class="footer-heading">Wij zoeken een loborant.</div>
            <div class="footer-details-block">
              <div class="call-text">Call to action.</div>
              <p class="call-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. </p>
            </div>
            <div class="form-block w-form">
              <form id="email-form" name="email-form" data-name="Email Form" class="form"><select id="Message-Page-3" name="Message-Page-3" data-name="Message Page 3" class="input-block w-select">
                  <option value="">Message Page</option>
                  <option value="First">First Choice</option>
                  <option value="Second">Second Choice</option>
                  <option value="Third">Third Choice</option>
                </select><label for="name-3" class="text-field">Your Name :</label><input type="text" class="input-block w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="" id="name-3"><label for="email-3" class="text-field">Email Address:</label><input type="email" class="input-block w-input" maxlength="256" name="email-3" data-name="Email 3" placeholder="" id="email-3" required=""><label class="text-field">Geef hier uw beschikbaarheid aan</label>
                <div class="timeframe-image-block"><img src="{{ asset('frontend_assets/images/calendar.svg') }}" loading="lazy" alt="" class="form-image"><img src="{{ asset('frontend_assets/images/watch.svg') }}" loading="lazy" alt="" class="form-image"></div><select id="File-Upload-3" name="File-Upload-3" data-name="File Upload 3" class="input-block w-select">
                  <option value="">File Upload CV</option>
                  <option value="First">First Choice</option>
                  <option value="Second">Second Choice</option>
                  <option value="Third">Third Choice</option>
                </select><label for="Description-3" class="text-field">Description</label><textarea placeholder="Schriif een korte motivatiebrief" maxlength="5000" id="Description-3" name="Description-3" data-name="Description 3" class="textarea w-input"></textarea><input type="submit" value="Submit" data-wait="Please wait..." class="submit-button w-button">
              </form>
              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
          </div>
        </div>
        <div class="grid-item">
          <div class="image-block"><img src="{{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope.jpg') }}" loading="lazy" sizes="(max-width: 479px) 94vw, (max-width: 767px) 96vw, (max-width: 1439px) 34vw, 409.5px" srcset="{{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-500.jpeg') }} 500w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-800.jpeg') }} 800w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-1080.jpeg') }} 1080w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-1600.jpeg') }} 1600w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-2000.jpeg') }} 2000w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-2600.jpeg') }} 2600w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope.jpg') }} 3037w" alt=""></div>
          <div class="footer-detail-wrapper">
            <div class="footer-heading">Wij zoeken een loborant.</div>
            <div class="footer-details-block">
              <div class="call-text">Call to action.</div>
              <p class="call-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. </p>
            </div>
            <div class="form-block w-form">
              <form id="email-form" name="email-form" data-name="Email Form" class="form"><select id="Message-Page-2" name="Message-Page-2" data-name="Message Page 2" class="input-block w-select">
                  <option value="">Message Page</option>
                  <option value="First">First Choice</option>
                  <option value="Second">Second Choice</option>
                  <option value="Third">Third Choice</option>
                </select><label for="name-2" class="text-field">Your Name :</label><input type="text" class="input-block w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="" id="name-2"><label for="email-2" class="text-field">Email Address:</label><input type="email" class="input-block w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="email-2" required=""><label class="text-field">Geef hier uw beschikbaarheid aan</label>
                <div class="timeframe-image-block"><img src="{{ asset('frontend_assets/images/calendar.svg') }}" loading="lazy" alt="" class="form-image"><img src="{{ asset('frontend_assets/images/watch.svg') }}" loading="lazy" alt="" class="form-image"></div><select id="File-Upload-2" name="File-Upload-2" data-name="File Upload 2" class="input-block w-select">
                  <option value="">File Upload CV</option>
                  <option value="First">First Choice</option>
                  <option value="Second">Second Choice</option>
                  <option value="Third">Third Choice</option>
                </select><label for="Description-2" class="text-field">Description</label><textarea placeholder="Schriif een korte motivatiebrief" maxlength="5000" id="Description-2" name="Description-2" data-name="Description 2" class="textarea w-input"></textarea><input type="submit" value="Submit" data-wait="Please wait..." class="submit-button w-button">
              </form>
              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 @include('frontend.includes.nav')
@endsection