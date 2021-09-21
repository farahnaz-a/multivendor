@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
{{ config('app.name') }} | {{ ucfirst($category->name) }}
@endsection

{{-- Menu Active --}}
@section('categories')
    active
@endsection


{{-- Breadcrumb --}}
@section('breadcrumb')
<div class="breadcrumb-wrapper">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categories</a></li>
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
                <h3>Category Edit</h3>

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
                <form action="{{ route('categories.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input name="name" id="name" value="{{ $category->name }}"  type="text" placeholder="Enter name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="answer">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <p>Existing Image : </p>
                        <img src="{{ asset('uploads/categories') }}/{{ $category->image }}" width="100" alt="">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{ $category->id }}">
                        <button class="btn btn-success" type="submit">Update</button>
                        <a href="{{ route('categories.index') }}" class="btn btn-info" type="submit">Return Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
