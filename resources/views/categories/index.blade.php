@extends('layouts.dashboard')


@section('title')
{{ config('app.name') }} | Categories
@endsection

{{-- Active Menu --}}
@section('categories')
    active
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
<div class="breadcrumb-wrapper">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categories</a></li>
        {{-- <li class="breadcrumb-item active"><a href="">Edit</a></li> --}}
    </ol>
</div>
@endsection

{{-- Main Content --}}
@section('content')
    @if(session('warning'))
        <div class="alert alert-warning">
            {{ session('warning') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Category Create</h4>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                </div>
                <div class="card-body">
                    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Category name</label>
                            <input name="name" id="name" value="{{ old('name') }}"  type="text" placeholder="Enter category name" class="form-control">
                            @error('name') 
                            <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="form-group">
                        <label for="image">Category image</label>
                        <input type="file" class="form-control" name="image">
                        @error('image') 
                        <small class="text-danger"> {{ $message }} </small>
                        @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Category List</h4>
                </div>
                <div class="card-body">
                    <div class="table table-responsive">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Sl.</th>
                                <th>Name</th>
                                <th>Subcat</th>
                                <th>Image</th>
                                <th>Added by</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ ucfirst($category->name) }}</td>
                                    <td>
                                        {{ $category->getSubCategory->count() }}
                                    </td>
                                    <td>
                                        <img width="100" src="{{ asset('uploads/categories') }}/{{ $category->image }}" alt="">
                                    </td>
                                    <td>
                                        {{-- {{ \App\Models\User::find($category->added_by)->name }} --}}
                                        {{ $category->getUser->name }}
                                    </td>
                                    <td>
                                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ route('categories.delete', $category->id) }}" class="btn btn-danger btn-sm">Delete</a>
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
