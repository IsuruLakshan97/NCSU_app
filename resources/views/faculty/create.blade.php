@extends('layouts.app')

@section('content')
@if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add a new faculty</div>

                <div class="card-body">
                    <form method="POST" action="/faculty" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="id" class="col-md-4 col-form-label text-md-end">ID</label>

                            <div class="col-md-6">
                                <input id="id" type="number" class="form-control @error('id') is-invalid @enderror" id="id" name="id" value="{{ old('id') }}" required autocomplete="id" autofocus>

                                @error('id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="facultyCode" class="col-md-4 col-form-label text-md-end">Faculty Code</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('facultyCode') is-invalid @enderror" id="facultyCode" name="facultyCode" value="{{ old('facultyCode') }}" required autocomplete="facultyCode" autofocus>

                                @error('facultyCode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="remark" class="col-md-4 col-form-label text-md-end">Remark</label>

                            <div class="col-md-6">
                                <input id="remark" type="text" class="form-control @error('remark') is-invalid @enderror" name="remark" value="{{ old('remark') }}" required autocomplete="remark" autofocus>

                                @error('remark')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <a type="button" class="btn btn-primary" href="/profile">
                                    Close
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
