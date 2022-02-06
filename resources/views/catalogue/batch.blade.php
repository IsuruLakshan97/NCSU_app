@extends('layouts.app')

@section('content')

    <div class="container vh-75">
    <main class="container">
    <div class="p-3 pb-1 rounded">
        <h3 class="text-left pb-1">Data Catalogue</h3>
        <h1 class="text-center font-weight-bold">{{$facultyname}}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/catalogue">Data Catalogue</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$facultyCode}}</li>
            </ol>
        </nav>
    </div>
    </main>
   <div class="container">
       <div class="row">
           <div class="list-group col-lg-10 col p-2 mx-auto">
               <div id="results-container">
               </div>
           </div>
       </div>
       <div id="main-container" class="container pt-2 px-5">
           <div class="row justify-content-center">
               <div class="card text-center p-2 cardSpacingHome border-primary" style="width:18rem;">
                   <div class="card-header">
                       <h5>Staff</h5>
                   </div>
                    <img src="/images/homepage/staff.jpg" class="card-img-top p-3" alt="Staff">
                   <div class="card-body">
                       <ul class="list-group list-group-flush">
                            <a class="btn btn-outline-primary w-100 buttonBottomMargin" href="/staff/academic/">Academic Staff</a>
                            <a class="btn btn-outline-primary w-100 buttonBottomMargin" href="/staff/temporary-academic-staff/">Temporary Academic
                                Staff</a>
                            <a class="btn btn-outline-primary w-100 buttonBottomMargin" href="/staff/academic-support-staff/">Academic Support
                                Staff</a>
                            <br>
                            <a class="btn btn-outline-primary w-100 buttonBottomMargin" href="/staff/past-heads-of-dep/">Past Heads of the
                                Department</a>
                            <a class="btn btn-outline-primary w-100 buttonBottomMargin" href="/staff/academic/past/">Past Academic Staff</a>
                       </ul>
                   </div>
               </div>
               <div class="card text-center p-2 cardSpacingHome border-primary" style="width:18rem;">
                   <div class="card-header">


                       <!-- Student cards -->
                       <h5>Students</h5>
                   </div>
                    <img src="/images/homepage/student.jpg" class="card-img-top p-3" alt="Students">
                   <div class="card-body">
                        <a class="btn btn-outline-primary w-100 buttonBottomMargin" href="/catalogue/{{$facultyCode}}/18">E18 Batch</a>
                        <a class="btn btn-outline-primary w-100 buttonBottomMargin" href="/catalogue/{{$facultyCode}}/17">E17 Batch</a>
                        <a class="btn btn-outline-primary w-100 buttonBottomMargin" href="/catalogue/{{$facultyCode}}/16">E16 Batch</a>
                        <a class="btn btn-outline-primary w-100 buttonBottomMargin" href="/catalogue/{{$facultyCode}}/15">E15 Batch</a>
                    </div>
               </div>
               <div class="card text-center p-2 cardSpacingHome border-primary" style="width:18rem;">



               <!-- ALUMNI cards -->
                   <div class="card-header">
                       <h5>Alumni</h5>
                   </div>
                    <img src="/images/homepage/alumni.jpg" class="card-img-top p-3" alt="Students">
                   <div class="card-body">
                         <a class="btn btn-outline-primary w-100 buttonBottomMargin" href="/students/e14">E14 Batch</a>
                             <a class="btn btn-outline-primary w-100 buttonBottomMargin" href="/students/e13">E13 Batch</a>
                             <a class="btn btn-outline-primary w-100 buttonBottomMargin" href="/students/e12">E12 Batch</a>
                            <a class="btn btn-outline-primary w-100 buttonBottomMargin" href="/alumni/">View more</a>
                   </div>
               </div>
           </div>
       </div>
   </div>
    <script src="/assets/js/search-script.js" type="text/javascript"></script>
    <script>
        //prevent submit by pressing enter
        $(document).ready(function () {
            $(window).keydown(function (event) {
                if (event.keyCode == 13) {
                    event.preventDefault();
                    return false;
                }
            });
        });
        SimpleJekyllSearch({
            searchInput: document.getElementById('search-input'),
            resultsContainer: document.getElementById('results-container'),
            json: '/search/search.json'
                            })
    </script>
</div>
   </div>
   <div class="container">
   <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top"><p class="col-md-6 mb-1 text-muted" style="font-size:80%;">&copy; COPYRIGHT 2022 DEPARTMENT OF COMPUTER ENGINEERING, UOP<br>Last Update : 29/01/2022
       </p>
       <p class="text-xl-left text-muted" style="font-size:80%;"><a href="/documentation/">Documentation</a>
       </p>
   </footer>
</div>

@endsection