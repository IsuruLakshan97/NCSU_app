@extends('layouts.app')

<head>
    <link rel="stylesheet" href="/css/home.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
  
@section('content')

<div class="container">
  <div class = "left-column">
    <p>Image slider or whatever</p>
  </div>

  <div class="right-column">
    <div class="container2">
      <div class="col-md-4 col-sm-12 text-center py-3">
        <h1><i class="fas fa-school"></i></h1>
        <h1><span class="counter">9</span></h1>
        <h5>Faculties</h5>
      </div>
                 
      <div class="col-md-4 col-sm-12 text-center py-3">
        <h1><i class="fas fa-user-graduate"></i></h1>
        <h1><span class="counter">18000</span>+</h1>
        <h5>Students</h5>
      </div>

      <div class="col-md-4 col-sm-12 text-center py-3">
        <h1><i class="fas fa-users"></i></h1>
        <h1><span class="counter">1500</span>+</h1>
        <h5>Academic Staff</h5>
      </div>             
    </div>

    <div class="title1">
      <h5 class="main-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores consequuntur aliquam a! Minus nemo pariatur, rerum nobis cupiditate corporis sequi fugiat ipsum quibusdam voluptatem accusamus fuga ab magnam. Aperiam, omnis.</h1>
      link to people page
    </div>

  </div>


</div>
 
@endsection

@section('footer')
  <div class="block">
  <div class="container" >
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-muted">© 2022 University of Peradeniya</p>

      <!-- <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Forum</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">People</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Login</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
      </ul> -->
    </footer>
  </div>
  </div>
@endsection