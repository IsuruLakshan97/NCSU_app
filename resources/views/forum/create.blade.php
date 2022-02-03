@extends('layouts.app')

@section('content')
<div class="container">
  <form class="row g-3" method="POST" action="/forum" enctype="multipart/form-data">
    @csrf

    <div class="col-md-6">
      <label for="fname" class="form-label">First name</label>

      <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" placeholder="Alex" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

      @error('fname')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

    </div>
    
    <div class="col-md-6">
      <label for="lname" class="form-label">Last name</label>

      <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" placeholder="Copper" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

      @error('lname')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

    </div>

    <div class="col-md-6">
      <label for="full_name" class="form-label">Full name</label>

      <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" placeholder="Alex Steven Cooper" name="full_name" value="{{ old('full_name') }}" required autocomplete="full_name" autofocus>

      @error('full_name')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

    </div>
    
    <div class="col-md-6">
      <label for="lname" class="form-label">Name with initial</label>

      <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" placeholder="A.S. Cooper" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

      @error('lname')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

    </div>
    
    <div class="col-12">
      <label for="address" class="form-label">Address</label>
      
      <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" placeholder="1234 Main St, Sanfrancisco, California" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

      @error('address')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

    </div>

    <div class="col-12">
      <label for="city" class="form-label">City</label>
      
      <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" placeholder="California" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>

      @error('city')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

    </div>

    <div class="col-12">
      <label for="birthday" class="form-label">Birthday</label>
      
      <input id="birthday" type="text" class="form-control @error('birthday') is-invalid @enderror" placeholder="04/01/1998" name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday" autofocus>

      @error('birthday')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

    </div>

    <div class="col-md-6">
      <label for="faculty_id" class="form-label">Facutly name</label>

      <select id="faculty_id" type="faculty_id" class="form-select @error('faculty_id') is-invalid @enderror" name="faculty_id" value="{{ old('faculty_id') }}" required autocomplete="faculty_id">

      </select>

      @error('faculty_id')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>

    <div class="col-md-4">
      <label for="department_id" class="form-label">Department name</label>

      <select id="department_id" type="department_id" class="form-select @error('department_id') is-invalid @enderror" name="department_id" value="{{ old('department_id') }}" required autocomplete="department_id">

      </select>

      @error('department_id')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>

    <div class="col-md-2">
      <label for="reg_no" class="form-label">Reg no.</label>
      
      <input id="reg_no" type="text" class="form-control @error('reg_no') is-invalid @enderror" placeholder="E/66/566" name="reg_no" value="{{ old('reg_no') }}" required autocomplete="reg_no" autofocus>

      @error('reg_no')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>

    <div class="mb-3">
      <label for="formFile" class="form-label">Insert a Profile Image</label>
      <input class="form-control" type="file" id="formFile">  
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</div>
@endsection