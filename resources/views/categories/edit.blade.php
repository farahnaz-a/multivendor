@extends('layouts.dashboard')


@section('title')
{{ config('app.name') }} | {{ ucfirst($category->name) }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header text-center">
                <h4>category Edit</h4>

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
            <div class="card-body p-3">
                <form action="{{ route('categories.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="py-2">
                        <label for="name">Name</label>
                        <input name="name" id="name" value="{{ $category->name }}"  type="text" placeholder="Enter name" class="form-control">
                    </div>
                    <div class="py-2">
                        <label for="answer">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="py-2">
                        <p>Existing Image : </p>
                        <img src="{{ asset('uploads/categories') }}/{{ $category->image }}" width="100" alt="">
                    </div>
                    <div class="py-2">
                        <input type="hidden" name="id" value="{{ $category->id }}">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
