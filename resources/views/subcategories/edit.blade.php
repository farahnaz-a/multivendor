@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
{{ config('app.name') }} | {{ ucfirst($subCategory->name) }}
@endsection

{{-- Active Menu --}}
@section('subcategories')
    active
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
<div class="breadcrumb-wrapper">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('subCategories.index') }}">Sub Categories</a></li>
        <li class="breadcrumb-item active"><a href="">Edit</a></li>
    </ol>
</div>
@endsection


{{-- Page Content --}}
@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header text-center">
                <h3>sub Category Edit</h3>

                @if ($errors->all())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

            </div>
            <div class="card-body">
                <form action="{{ route('subCategories.update', $subCategory->id) }}" method="POST" enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="form-group">
                        <label for="name">Sub Category name</label>
                        <input name="name" id="name" value="{{ $subCategory->name }}"  type="text" placeholder="Enter Sub Category name" class="form-control">
                        @error('name') 
                        <small class="text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                    <div class="form-group">
                       <label for="category_id">Select Category</label>
                       <select class="form-control" name="category_id" id="category_id">
                           <option value="{{ $subCategory->category_id }}">{{ $subCategory->getCategory->name }}</option>
                            @foreach ($categories as $category)
                               @if($category->name != $subCategory->getCategory->name)
                                <option  value="{{ $category->id }}">{{ ucfirst($category->name) }}</option>
                               @endif
                           @endforeach
                       </select>
                       @error('category_id') 
                       <small class="text-danger"> {{ $message }} </small>
                       @enderror
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Update</button>
                        <a href="{{ route('subCategories.index') }}" class="btn btn-info" type="submit">Return Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
