@extends('layouts.frontend')

@section('content')
<div class="about-section">
    <div class="about-title-wrap">
      <h1 class="about-title">About Us</h1>
    </div>
  </div>
  <div class="section">
    <div class="wrapper">
      <div class="about-content-wrap">
        <div class="about-left">
          <h2 class="about-sub-title">Lorem Ipsum is not random text.</h2>
          <p class="about-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere. </p>
        </div>
        <div class="about-right"><img src="{{ asset('frontend_assets/images/About-us-medic.jpg') }}" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 41vw, (max-width: 1439px) 43vw, 532.5px" srcset="images/About-us-medic-p-800.jpeg 800w, images/About-us-medic.jpg 904w" alt=""></div>
      </div>
    </div>
  </div>
  <div class="testimonial-section">
    <div class="wrapper">
      <h2 class="contact-title">Our Client Say!</h2>
      <p class="testimonial-paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
      <div data-delay="3000" data-animation="slide" data-autoplay="1" data-duration="500" data-infinite="1" class="testimonial-slider w-slider">
        <div class="mask-2 w-slider-mask">
          <div class="slide w-slide">
            <div class="slide-wrapper">
              <div class="author-wrap"><img src="{{ asset('frontend_assets/images/Author.jpg') }}" loading="lazy" alt="" class="author">
                <div class="author-details">
                  <div class="name">Cute Girl</div>
                  <div class="position gap">Designation</div>
                </div>
              </div>
              <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. </p>
            </div>
          </div>
          <div class="slide w-slide">
            <div class="slide-wrapper">
              <div class="author-wrap"><img src="{{ asset('frontend_assets/images/A3.jpg') }}" loading="lazy" alt="" class="author">
                <div class="author-details">
                  <div class="name">Cute Girl</div>
                  <div class="position gap">Designation</div>
                </div>
              </div>
              <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. </p>
            </div>
          </div>
          <div class="slide w-slide">
            <div class="slide-wrapper">
              <div class="author-wrap"><img src="{{ asset('frontend_assets/images/A-2.jpg') }}" loading="lazy" alt="" class="author">
                <div class="author-details">
                  <div class="name">Cute Girl</div>
                  <div class="position gap">Designation</div>
                </div>
              </div>
              <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. </p>
            </div>
          </div>
        </div>
        <div class="arrow-left w-slider-arrow-left">
          <div class="t-slider-icon w-icon-slider-left"></div>
        </div>
        <div class="arrow-right w-slider-arrow-right">
          <div class="t-slider-icon w-icon-slider-right"></div>
        </div>
        <div class="slide-nav-2 w-slider-nav w-round"></div>
      </div>
    </div>
  </div>
  @include('frontend.includes.nav')
@endsection