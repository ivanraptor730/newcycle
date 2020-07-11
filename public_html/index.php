<?php
require_once'core/init.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

  <title>Home - New Cycle</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="img/logo.png" width="50px" height="50px">
        New Cycle Bike Shop
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-lg-3">
        <div class="list-group my-5">
          <a class="list-group-item bg-dark text-white disabled">Products</a>
          <a class="list-group-item dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Bicycles
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="road-bikes.php">Road Bikes</a>
            <a class="dropdown-item" href="e-bikes.php">E Bikes</a>
            <a class="dropdown-item" href="mountain-bikes.php">Mountain Bikes</a>
            <a class="dropdown-item" href="kid-bikes.php">Kid Bikes</a>
          </div>
          <a href="parts.php" class="list-group-item">Bicycle Parts</a>
          <a href="accessories.php" class="list-group-item">Accessories</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-5" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row mb-4">
          <div class="col lg-6">
            <h4>Bike Categories</h4>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="road-bikes.php">Road Bikes</a>
                </h4>
                <p class="card-text">Lightweight, efficient bikes with drop handlebars and narrow tires for recreational
                  riding on pavement.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="e-bikes.php">E-Bikes</a>
                </h4>
                <p class="card-text">Electronic bicycles can be bikes from almost any of the other categories here,
                  designed with a small, lightweight electric motor to assist the rider.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="mountain-bikes.php">Mountain Bikes</a>
                </h4>
                <p class="card-text">Rugged machines with flat handlebars and wide, knobby tires for riding narrow dirt
                  trails.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="kid-bikes.php">Kid Bikes</a>
                </h4>
                <p class="card-text">Get your little ones into the action with a great kid’s bike. There are all kinds
                  of options, even dedicated road and full-suspension
                  mountain bikes built for small riders. Higher quality means lighter weight and kid-friendly parts, so
                  your child has more fun riding. And you can start them earlier than ever now that pedal-less “balance”
                  bikes have largely replaced tricycles as a toddler’s first ride.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; New Cycle 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>