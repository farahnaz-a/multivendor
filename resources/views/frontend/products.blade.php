@extends('layouts.frontend')

@section('content')
@include('frontend.includes.nav')
<div class="section">
    <div class="medic-wrapper">
      <div class="medic-catageroy">
        <div class="div-block-2">
          <a href="#Product-Collection" class="medic-menu w-inline-block">
            <div>Product Collection</div>
          </a>
          <a href="#Course-Collection" class="medic-menu w-inline-block">
            <div>Course Collection</div>
          </a>
          {{-- <a href="#Membership" class="medic-menu w-inline-block">
            <div>Membership</div>
          </a> --}}
        </div>
      </div>
      <div class="product-wrapper">
        <h1 class="medic-title">Product Collection</h1>
        <div id="Product-Collection" class="product-collection-wrap">
          <div class="collection-grid">
              @foreach ($products as $product)
              <div class="collection-wrap">
                <a href="{{ route('product.details', $product->id) }}" class="product-link w-inline-block">
                  <div class="collection-image-wrap"><img src="{{ asset('uploads/products') }}/{{ $product->image }}" loading="lazy" sizes="100vw" srcset="{{ asset('uploads/products') }}/{{ $product->image }} 500w, {{ asset('uploads/products') }}/{{ $product->image }} 800w, {{ asset('uploads/products') }}/{{ $product->image }} 1000w" alt="" class="course-image"></div>
                  <div class="about-course-wrap">
                    <div class="course-name">{{ $product->title }}</div>
                    <div class="subject">{{ $product->getSubCategory->name }}</div>
                    <div class="price">{{ $product->price }} €</div>
                  </div>
                </a>
                <div class="cart-button-wrapper">
                  <a href="cart.html" class="cart-button square w-button">Add to Cart</a>
                </div>
              </div>
              @endforeach
          </div>
        </div>
        <h1 class="medic-title">Course Collection</h1>
        <div id="Course-Collection" class="course-collection-wrap">
          <div class="collection-grid">
            @foreach ($courses as $item)
            <div class="collection-wrap">
              <a href="{{ route('course.details', $item->id) }}" class="product-link w-inline-block">
                <div class="collection-image-wrap"><img src="{{ asset('uploads/course/thumbnail') }}/{{ $item->thumbnail }}" loading="lazy" alt="" class="course-image"></div>
                <div class="about-course-wrap">
                  <div class="course-name">{{ $item->name }}</div>
                  <div class="subject">{{ $item->category }}</div>
                  <div class="price">{{ $item->price }} €</div>
                </div>
              </a>
              <div class="cart-button-wrapper">
                <a href="cart.html" class="cart-button square w-button">Add to Cart</a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        {{--  <div id="Membership" class="membership-wrap">
          <h1 class="contact-title">Membership</h1>
          <div class="membership-subtitle">Lorem Ipsum has been the industry&#x27;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</div>
          <div class="membership-wrapper">
            <div class="membership-card">
              <div class="top-part"><img src="images/Trigle.svg" loading="lazy" alt="" class="curve">
                <div>Standard</div>
              </div>
              <div class="value">50$</div>
              <div class="small-text">4-week series</div>
              <div class="card-about-text top-gap">Industry&#x27;s standard dummy </div>
              <div class="card-about-text">Lorem Ipsum has been the </div>
              <div class="card-about-text">Dummy text ever since</div>
              <div class="bottom-block">
                <div>Sign up now</div>
              </div>
            </div>
            <div class="membership-card">
              <div class="top-part"><img src="images/Trigle.svg" loading="lazy" alt="" class="curve">
                <div>Standard</div>
              </div>
              <div class="value">50$</div>
              <div class="small-text">4-week series</div>
              <div class="card-about-text top-gap">Industry&#x27;s standard dummy </div>
              <div class="card-about-text">Lorem Ipsum has been the </div>
              <div class="card-about-text">Dummy text ever since</div>
              <div class="bottom-block">
                <div>Sign up now</div>
              </div>
            </div>
            <div class="membership-card big">
              <div class="top-part highlited"><img src="images/Trigle-Pink2.svg" loading="lazy" alt="" class="curve highlited">
                <div class="small">Unlimited</div>
                <div class="higlighted-m">Monthly Membership</div>
              </div>
              <div class="value">50$</div>
              <div class="small-text">4-week series</div>
              <div class="card-about-text top-gap">Industry&#x27;s standard dummy </div>
              <div class="card-about-text">Lorem Ipsum has been the </div>
              <div class="card-about-text">Dummy text ever since</div>
              <div class="bottom-block color">
                <div>Sign up now</div>
              </div>
            </div>
            <div class="membership-card">
              <div class="top-part"><img src="images/Trigle.svg" loading="lazy" alt="" class="curve">
                <div>Standard</div>
              </div>
              <div class="value">50$</div>
              <div class="small-text">4-week series</div>
              <div class="card-about-text top-gap">Industry&#x27;s standard dummy </div>
              <div class="card-about-text">Lorem Ipsum has been the </div>
              <div class="card-about-text">Dummy text ever since</div>
              <div class="bottom-block">
                <div>Sign up now</div>
              </div>
            </div>
          </div>
        </div>  --}}
      </div>
    </div>
  </div>
@endsection