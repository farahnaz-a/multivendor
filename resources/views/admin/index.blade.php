@extends('layouts.dashboard')

@section('title')
    {{ config('app.name') }} | Admin Pannel
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div>
                <div class="card">
                    <div class="card-header text-center">
                        <h4>User Table</h4>
                        <h5>Total Users: {{ $total }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="table table-responsive">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Sl.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Created at</th>
                                    <th>Varified</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{ $users->firstitem() +$key }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at->diffforhumans() }}</td>
                                    <td>
                                        @if ($user->email_verified_at)
                                        <div class="badge badge-success">yes</div>
                                        @else
                                        <div class="badge badge-danger">No</div>
                                        @endif
                                    </td>
                                    <td><a href="" class=" btn-sm btn-danger">Ban</a></td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                {{ $users->links() }}
            </div>
        </div>
    </div>

@endsection
