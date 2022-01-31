<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" ></script>
    <title>Data collection website</title>
</head>
<body>
    <!-- Navigation bar -->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
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
    <!-- ------ -->

    <!-- banner section -->
    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="promo-title"> DATA COLLECTION WEBSITE</p>
                    <P> This website is used to collect the data of the academic staff University of Peradeniya. Please click the FILL FORUM button to enter the data..</P>
                    <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Fill forum</a>
                    <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Login</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="/img/books.png" class="img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer section -->
    <section id="footer">
        <div class="container">
            <p class="text-center">© 2022 University of Peradeniya</p>
        </div>
    </section>
</body>
</html>