<!DOCTYPE html>
<html lang=" en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <title>Data catalogue</title>
    <link rel="icon" href="/assets/img/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="/assets/fontawesome/fontawesome.min.css" rel="stylesheet">
    <link href="/assets/fontawesome/solid.min.css" rel="stylesheet">
    <link href="/assets/fontawesome/brands.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="/assets/js/index.js"></script><style>
        body {
            overflow-y: scroll;
        }
    </style>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RV3PFV0QLS"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
        gtag('config', 'G-RV3PFV0QLS', { 'anonymize_ip': true });
    </script>
</head>
<body><a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top cd-top--fade-out" data-abc="true"
        style="display: none;"></a>
      <!-- Navigation bar -->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="pull-left collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Forum</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
              </ul>
            </div>
          </nav>
    </section>
   <div class="container vh-75">
<main class="container">
   <div class="bg-secondary p-3 pb-1 rounded">
       <h1 class="text-white text-center">Data Catalogue</h1>
       <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
               <li class="breadcrumb-item active text-white" aria-current="page"> <a href="/" class="link-light"> Home</a>
               </li>
               <li class="breadcrumb-item active text-white" aria-current="page">Data Catalogue</li>
           </ol>
       </nav>
   </div>
</main>
<div class="container py-4 px-lg-5">
   <div class="row justify-content-center">
        <a class="btn btn-outline-primary w-25  m-2" href="#">Faculty of Agriculture</a>
        <a class="btn btn-outline-primary w-25  m-2" href="#">Faculty of Arts</a>
        <a class="btn btn-outline-primary w-25  m-2" href="#">Faculty of Dental Sciences</a>
        <a class="btn btn-outline-primary w-25  m-2" href="#">Faculty of Medicine</a>
        <a class="btn btn-outline-primary w-25  m-2" href="#">Faculty of Engineering</a>
        <a class="btn btn-outline-primary w-25  m-2" href="#">Faculty of Allied Health Sciences</a>
        <a class="btn btn-outline-primary w-25  m-2" href="#">Faculty of Science</a>
        <a class="btn btn-outline-primary w-25  m-2" href="#">Faculty of Management</a>
        <a class="btn btn-outline-primary w-25  m-2" href="#">Faculty of Engineering</a>
    </div>
</div>
   </div>
   <div class="container">
   <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top"><p class="col-md-6 mb-1 text-muted" style="font-size:80%;">&copy; COPYRIGHT 2022 DEPARTMENT OF COMPUTER ENGINEERING, UOP<br>Last Update : 31/01/2022
       </p>
       <p class="text-xl-left text-muted" style="font-size:80%;"><a href="/documentation/">Documentation</a>
       </p>
   </footer>
</div>
</body>
</html>