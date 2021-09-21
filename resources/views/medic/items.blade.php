@extends('layouts.medic')

@section('title')
    {{ config('app.name') }} | My Items
@endsection



@section('content')
    <div class="dashboard-header-wrap">
      <h2 class="dashboard">My Courses</h2>
    </div>
    @forelse ($videos as $item)
    <div class="courses-grid">
        <div id="w-node-_3c150f7d-4a03-3fb0-728d-7e6e17194390-b38e5e8e" class="product-image-wrapper"><img src="{{ asset('uploads/course/thumbnail') }}/{{ $item->thumbnail }}" loading="lazy" alt="" class="product-image"></div>
        <div class="product-name-wrapper">
          <div>{{ $item->name }}</div>
        </div>
      </div>
    @empty
    <div class="product-name-wrapper">
        <div>No products found.</div>
      </div>
    @endforelse
    <div class="dashboard-header-wrap">
      <h2 class="dashboard">My Products</h2>
    </div>
    @forelse ($products as $item)
    <div class="courses-grid">
        <div id="w-node-_3c150f7d-4a03-3fb0-728d-7e6e17194390-b38e5e8e" class="product-image-wrapper"><img src="{{ asset('uploads/products') }}/{{ $item->image }}" loading="lazy" alt="" class="product-image"></div>
        <div class="product-name-wrapper">
          <div>{{ $item->name }}</div>
        </div>
      </div>
    @empty
    <div class="product-name-wrapper">
        <div>No products found.</div>
      </div>
    @endforelse
@endsection