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
            </div>
            <div class="card-body">
                <div class="p-2">
                    <label for="question">Question</label>
                    <input name="question" id="question" type="text" placeholder="" class="form-control">
                </div>
                <div class="p-2">
                    <label for="answer">Answer</label>
                    <textarea name="answer" id="answer" class="form-control"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-center">
                <h4>FAQ Read</h4>
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
                        <tr>
                            <td>01</td>
                            <td>What is your name?</td>
                            <td>Admin</td>
                            <td><a href="" class=" btn-sm btn-danger">Delete</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
