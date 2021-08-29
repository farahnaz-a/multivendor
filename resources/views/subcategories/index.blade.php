@extends('layouts.dashboard')


@section('title')
{{ config('app.name') }} | Sub Categories
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
        <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">subcategories</a></li>
        {{-- <li class="breadcrumb-item active"><a href="">Edit</a></li> --}}
    </ol>
</div>
@endsection

{{-- Main Content --}}
@section('content')
    <div class="row">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Sub Category Create</h4>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                </div>
                <div class="card-body p-3">
                    <form action="{{ route('subCategories.store') }}" method="POST">
                        @csrf
                        <div class="py-2">
                            <label for="name">Sub Category name</label>
                            <input name="name" id="name" value="{{ old('name') }}"  type="text" placeholder="Enter Sub Category name" class="form-control">
                            @error('name') 
                            <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="py-2">
                        <label for="category_id">Select Category</label>
                        <select class="form-control" name="category_id" id="category_id">
                            <option value="">-Select your category-</option>
                            @foreach ($categories as $category)
                                <option  value="{{ $category->id }}">{{ ucfirst($category->name) }}</option>
                            @endforeach
                        </select>
                        @error('category_id') 
                        <small class="text-danger"> {{ $message }} </small>
                        @enderror
                        </div>
                        <div class="py-2">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Sub Category List</h4>
                </div>
                <div class="card-body">
                    <div class="table table-responsive">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Sl.</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($subcategories as $subCategory)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $subCategory->name }}</td>
                                    <td>{{ $subCategory->getCategory->name }}</td>
                                    <td>
                                        <a href="{{ route('subCategories.edit', $subCategory->id) }}" class="btn float-left btn-sm btn-warning">Edit</a>

                                        <form action="{{ route('subCategories.destroy', $subCategory->id) }}" method="POST"> 
                                            {{ method_field('DELETE') }}
                                            @csrf
                                            <a href="{{ route('subCategories.destroy', $subCategory->id) }}" onclick="event.preventDefault();this.closest('form').submit();" class="float-right btn btn-sm btn-danger">Delete</a>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
