@extends('layouts.dashboard')


{{-- Title --}}
@section('title')
{{ config('app.name') }} | {{ ucfirst($faq->question) }}
@endsection


{{-- Breadcrumb --}}
@section('breadcrumb')
<div class="breadcrumb-wrapper">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('faq.index') }}">FAQ</a></li>
        <li class="breadcrumb-item active"><a href="">Edit</a></li>
    </ol>
</div>
@endsection

{{-- Page Content --}}
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card">
            <div class="card-header text-center">
                <h3>FAQ Edit</h3>
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
                <form action="{{ url('faq-update') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="question">Question</label>
                        <input name="question" id="question" value="{{ $faq->question }}"  type="text" placeholder="Enter Question" class="form-control">
                        @error('question') 
                        <small class="text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="answer">Answer</label>
                        <textarea name="answer" id="answer" placeholder="Enter Answer" class="form-control">{{ $faq->answer }}</textarea>
                        @error('answer') 
                        <small class="text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{ $faq->id }}">
                        <button class="btn btn-success" type="submit">Submit</button>
                        <a href="{{ route('faq.index') }}" class="btn btn-info">Return Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
