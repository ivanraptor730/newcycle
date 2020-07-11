<?php
require_once'core/init.php';
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

  <title>Item Page - New Cycle</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-item.css" rel="stylesheet">

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
          <li class="nav-item">
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
      <?php

        $query = "select * from `product` where `id` = $id";
        $result = mysqli_query($con, $query);

        while($row = $result->fetch_assoc()){
        echo "
        <div class='card mt-4 my-5'>
        <img src='data:image/jpeg;base64,".base64_encode( $row['image'] )."' width='700px' height='400px'/>
          <div class='card-body'>
            <h4 class='card-title'>
              <a href=item-page.php?id=".$row['id'].">".$row['name']."</a>
            </h4>
            <h5>PHP ".$row['price']."</h5>
            <p class='card-text'>".$row['description']."</p>
            <div class='card-footer'>
              <button type='button' class='btn btn-primary w-25'>Buy Now</button>
              <button type='button' class='btn btn-primary w-25'>Add to Cart</button>
            </div>
            </div>
          </div>";
         }
          ?>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-9 -->

      </div>

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