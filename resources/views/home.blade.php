@extends('layouts.app')

@section('content')
<div class="container">
    @if ($user->is_admin === 1)

        @section('navbar')
        <a class="dropdown-item" href="/profile/create">Add new user</a>
        <a class="dropdown-item" href="/faculty/create">Add new faculty</a>
        @endsection

        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Faculty</th>
                <th scope="col">Active</th>
                <th scope="col">Type(Admin/user)</th>
                <th scope="col">Email verification time</th>
                <th scope="col">Remark</th>
                </tr>
            </thead>
            <tbody>
            @foreach($name as $data)
                <tr>
                    <th scope="row">{{$data->id}}</th>
                    <td>{{$data->name}}</td>
                    <td>{{$data->username}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->faculty->name}}</td>
                    <td>{{$data->active}}</td><!-- need to change to department values -->
                    <td>{{$data->is_admin}}</td>
                    <td>{{$data->email_verified_at}}</td>
                    <td>{{$data->remark}}</td>
                    <td><a type="button" class="btn btn-primary btn-sm" role="button" href="/profile/{{$data->id}}">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
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

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div> -->git
        <main class="container">
            <h1>{{$user->faculty->name}}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
        </main>
        
        <div class="row py-4">
            <div class="col-md-2"></div>
            <div class="d-grid gap-2 col-md-8">
                @foreach($batch as $data)
                <a role="button" class="btn btn-outline-primary" type="button" href="/person/{{$data->id}}">{{$data->batch}}</a>
                @endforeach
            </div>
        </div>
        
    @endif
</div>

@endsection

@section('footer')
<div class="block">
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">© 2022 University of Peradeniya</p>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="/forum/create" class="nav-link px-2 text-muted">Forum</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">People</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>

        </footer>
    </div>
</div>
@endsection