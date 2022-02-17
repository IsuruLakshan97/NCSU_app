@extends('layouts.app')

<head>
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/nicepage.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="/js/jquery.js"></script>
    <script src="/js/nicepage.js"></script>
</head>
  
@section('content')

<div class="container2" style="background-image:url(/img/back2.jpeg);">

<section class="u-clearfix u-image u-shading u-section-1" src="" data-image-width="1280" data-image-height="800" id="sec-5f60">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-text u-text-1">Title#1</h2>
            <p class="u-text u-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab ratione voluptatibus quidem accusamus labore nemo laudantium amet quam iure architecto dolorum vitae, excepturi consectetur inventore, praesentium beatae quia sapiente et.</p>
            <a href="/catalogue/" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-1-light-1 u-radius-50 u-btn-1">EXPLORE</a>
          </div>
        </div>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-list-item u-repeater-item u-video-cover u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2">
                <h1 class="u-text u-text-default u-title u-text-3" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">9</h1>
                <p class="u-text u-text-4">Faculties</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item u-video-cover u-list-item-2">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-3">
                <h1 class="u-text u-text-default u-title u-text-5" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">18000 +</h1>
                <p class="u-text u-text-6">Students</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item u-video-cover u-list-item-3">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-4">
                <h1 class="u-text u-text-default u-title u-text-7" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">1500 +</h1>
                <p class="u-text u-text-8">Staff</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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