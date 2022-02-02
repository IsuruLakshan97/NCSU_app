@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Hello admin') }}
                </div>
            </div>
        </div>
    </div> -->
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Faculty</th>
            <th scope="col">FacultyId</th>
            </tr>
        </thead>
        <tbody>
        @foreach($name as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->username}}</td>
                <td>{{$data->email}}</td>
                <td>{{$faculty::find($data->faculty_id)->name}}</td>
                <td>{{$data->faculty_id}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
