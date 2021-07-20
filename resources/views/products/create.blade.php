@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
{{ config('app.name') }} | Add Product
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
<div class="breadcrumb-wrapper">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ url('/') }}">Home</a></li>
    </ol>
</div>
@endsection

@section('content')
 
 <div class="row">
         
    <div class="col-lg-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Products</h4>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('Warning'))
                    <div class="alert alert-success">{{ session('Warning') }}</div>
                @endif
            </div>
            <div class="card-body">
                <form class="form form-vertical" action="{{ route('products.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">Product Name</label>
                                <input type="text" id="name" class="form-control" name="name" placeholder="Enter Product name">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">Product description</label>
                                <textarea name="description" class="form-control" placeholder="Enter product description"></textarea>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">Product Price</label>
                                <input type="text" id="price" class="form-control" name="price" placeholder="Enter Product price">
                                @error('price')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">Select Category</label>
                                <select name="subCategory_id" class="form-control">
                                    <option value="">-Select category-</option>
                                    @foreach ($subCategories as $item)
                                    
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>

                                    @endforeach
                                </select>
                                @error('subCategory_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="customFile">Product Image</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile"></label>
                                </div>
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="customFile">Product Multiple Image</label>
                                <div class="custom-file">
                                    <input type="file" name="multiple_image[]" multiple class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile"></label>
                                </div>
                                @error('multiple_image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
 </div>
 
@endsection