@extends('layouts.dashboard')


@section('title')
{{ config('app.name') }} | Freaquenty Asked Questions
@endsection

@section('content')
<div class="row">

    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-center">
                <h4>FAQ Create</h4>

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
                <form action="{{ url('/faq-store') }}" method="POST">
                    @csrf
                    <div class="py-2">
                        <label for="question">Question</label>
                        <input name="question" id="question" value="{{ old('question') }}"  type="text" placeholder="Enter Question" class="form-control">
                        @error('question') 
                        <small class="text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                    <div class="py-2">
                        <label for="answer">Answer</label>
                        <textarea name="answer" id="answer" placeholder="Enter Answer" class="form-control">{{ old('answer') }}</textarea>
                        @error('answer') 
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
                <h4>FAQ List</h4>
            </div>
            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Sl.</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($faqs as $key => $faq)
                            <tr>
                                <td>{{ $faqs->firstItem() + $key }}</td>
                                <td>{{ $faq->question }}</td>
                                <td>{{ $faq->answer }}</td>
                                
                                <td>
                                    <a href="" class="btn-sm btn-primary">View</a>
                                    <a href="{{ url('/faq-edit') }}/{{ $faq->id }}" class="btn-sm btn-warning">Edit</a>
                                    <a href="{{ url('/faq-delete') }}/{{ $faq->id }}" class="btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @empty
                            </tr>
                                <td> No data available </td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
