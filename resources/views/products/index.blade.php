@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
{{ config('app.name') }} |  Product List
@endsection

{{-- Active Menu --}}
@section('productsIndex')
    active
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
<div class="breadcrumb-wrapper">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="">Products</a></li>
        <li class="breadcrumb-item active"><a href="">Index</a></li>
    </ol>
</div>
@endsection


@section('content')
<div class="col-lg-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Products</h4>
        </div>
        <div class="card-body">
            <p class="card-text">
                List of all the products
            </p>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Sl.</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Multiple</th>
                        <th>Category</th>
                        <th>Subcat</th>
                        <th>Actions</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>
                            {{ $loop->index + 1 }}
                        </td>
                        <td>
                            <span class="font-weight-bold">{{ ucfirst($product->name) }}</span>
                        </td>
                        <td>
                            <img src="{{ asset('uploads/products') }}/{{ $product->image }}" width="100" alt="product">
                        </td>
                        <td>
                             @forelse ($product->get_multiple_images as $key =>  $image)
                                    <img src="{{ asset('uploads/multiple_images') }}/{{ $image->image }}" width="100" alt="product">
                             @empty
                                No multiple images 
                             @endforelse
                        </td>
                        <td>
                            {{ $product->getSubCategory->getCategory->name }}
                        </td>
                        <td>
                            {{ $product->getSubCategory->name }}
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('products.edit', $product->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                        <span>Edit</span>
                                    </a>
                                   @if($product->get_multiple_images->count() > 0)
                                   <a class="dropdown-item" href="{{ route('update.multiple', $product->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                    <span>Edit Multiple Image</span>
                                </a>
                                   @endif
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                        {{-- Initiate Delete method --}}
                                        {{ method_field('DELETE') }}
                                        @csrf 
                                        <a class="dropdown-item" href="{{ route('products.destroy', $product->id) }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                            <span>Delete</span>
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection