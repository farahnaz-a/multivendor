@extends('layouts.dashboard')


@section('title')
{{ config('app.name') }} | {{ ucfirst($faq->question) }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header text-center">
                <h4>FAQ Edit</h4>

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
                <form action="{{ url('faq-update') }}" method="POST">
                    @csrf
                    <div class="py-2">
                        <label for="question">Question</label>
                        <input name="question" id="question" value="{{ $faq->question }}"  type="text" placeholder="Enter Question" class="form-control">
                        @error('question') 
                        <small class="text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                    <div class="py-2">
                        <label for="answer">Answer</label>
                        <textarea name="answer" id="answer" placeholder="Enter Answer" class="form-control">{{ $faq->answer }}</textarea>
                        @error('answer') 
                        <small class="text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                    <div class="py-2">
                        <input type="hidden" name="id" value="{{ $faq->id }}">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
