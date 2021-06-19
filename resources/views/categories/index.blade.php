@extends('layouts.dashboard')


@section('title')
{{ config('app.name') }} | Categories
@endsection

@section('content')
<div class="row">

    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-center">
                <h4>Category Create</h4>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

            </div>
            <div class="card-body p-3">
                <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="py-2">
                        <label for="name">Category name</label>
                        <input name="name" id="name" value="{{ old('name') }}"  type="text" placeholder="Enter category name" class="form-control">
                        @error('name') 
                        <small class="text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                    <div class="py-2">
                       <label for="image">Category image</label>
                       <input type="file" class="form-control" name="image">
                       @error('image') 
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
                <h4>Category List</h4>
            </div>
            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Sl.</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ ucfirst($category->name) }}</td>
                                <td>
                                    <img width="100" src="{{ asset('uploads/categories') }}/{{ $category->image }}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
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
