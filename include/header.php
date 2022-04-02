<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>ROYAL Taxi - Taxi Rental System</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free HTML Templates" name="keywords">
  <meta content="Free HTML Templates" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="public/User/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="public/User/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="public/User/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="public/User/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Topbar Start -->
  <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
    <div class="row">
      <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
        <div class="d-inline-flex align-items-center">
          <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</a>
          <span class="text-body">|</span>
          <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>info@example.com</a>
        </div>
      </div>
      <div class="col-md-6 text-center text-lg-right">
        <div class="d-inline-flex align-items-center">
          <a class="text-body px-3" href="">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a class="text-body px-3" href="">
            <i class="fab fa-twitter"></i>
          </a>
          <a class="text-body px-3" href="">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a class="text-body px-3" href="">
            <i class="fab fa-instagram"></i>
          </a>
          <a class="text-body pl-3" href="">
            <i class="fab fa-youtube"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->


  <!-- Navbar Start -->
  <div class="container-fluid position-relative nav-bar p-0">
    <div class="position-relative px-lg-5" style="z-index: 9;">
      <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
        <a href="index.php" class="navbar-brand">
          <h1 class="text-uppercase text-primary mb-1">Royal Taxi</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
          <div class="navbar-nav ml-auto py-0">
            <a href="index.php" class="nav-item nav-link active">Home</a>
            <a href="about.php" class="nav-item nav-link">About</a>
            <a href="taxi_list.php" class="nav-item nav-link">Taxies</a>
            <a href="booking.php" class="nav-item nav-link">Booking</a>
            <a href="contact.php" class="nav-item nav-link">Contact</a>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- Navbar End -->


  <!-- Search Start -->
  <div class="container-fluid bg-white pt-3 px-lg-5">
    <div class="row mx-n2">
      <div class="col-xl-2 col-lg-6 col-md-6 px-2">
        <select class="custom-select px-4 mb-3" style="height: 50px;">
          <option selected>Pickup Location</option>
          <option value="1">Location 1</option>
          <option value="2">Location 2</option>
          <option value="3">Location 3</option>
        </select>
      </div>
      <div class="col-xl-2 col-lg-6 col-md-6 px-2">
        <select class="custom-select px-4 mb-3" style="height: 50px;">
          <option selected>Drop Location</option>
          <option value="1">Location 1</option>
          <option value="2">Location 2</option>
          <option value="3">Location 3</option>
        </select>
      </div>
      <div class="col-xl-2 col-lg-6 col-md-6 px-2">
        <div class="date mb-3" id="date" data-target-input="nearest">
          <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Date" data-target="#date" data-toggle="datetimepicker" />
        </div>
      </div>
      <div class="col-xl-2 col-lg-6 col-md-6 px-2">
        <div class="time mb-3" id="time" data-target-input="nearest">
          <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Time" data-target="#time" data-toggle="datetimepicker" />
        </div>
      </div>
      <div class="col-xl-2 col-lg-6 col-md-6 px-2">
        <select class="custom-select px-4 mb-3" style="height: 50px;">
          <option selected>Select A Car</option>
          <option value="1">Car 1</option>
          <option value="2">Car 1</option>
          <option value="3">Car 1</option>
        </select>
      </div>
      <div class="col-xl-2 col-lg-4 col-md-6 px-2">
        <button class="btn btn-primary btn-block mb-3" type="submit" style="height: 50px;">Book Now</button>
      </div>
    </div>
  </div>
  <!-- Search End -->