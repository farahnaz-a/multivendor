@extends('layouts.dashboard')


{{-- Title --}}
@section('title')
{{ config('app.name') }} | {{ ucfirst($views->question) }}
@endsection


{{-- Breadcrumb --}}
@section('breadcrumb')
<div class="breadcrumb-wrapper">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('faq.index') }}">FAQ</a></li>
        <li class="breadcrumb-item active"><a href="">View</a></li>
    </ol>
</div>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Faq View</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                                <tr>
                                    <td>Question</td>
                                    <td>{{ $views->question }}</td>
                                </tr>
                                <tr>
                                    <td>Answer</td>
                                    <td>{{ $views->answer }}</td>
                                </tr>
                                <tr>
                                    <td>Created At</td>
                                    <td>{{ $views->created_at->diffforhumans() }}</td>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
            <a href="{{ route('faq.index') }}" class="btn btn-info">Return Back</a>
        </div>
    </div>
@endsection