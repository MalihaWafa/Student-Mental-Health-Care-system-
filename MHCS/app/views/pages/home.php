<!-- By Maliha Shahed
     A18CS4022 -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>home page</title>
    <style>
      body{
        background-image: url("../public/images/bg.png");
        background-color:black;
        background-repeat: no-repeat;
        background-size: 95%;
      }
      .link{
        color: Black;
      }
      .jumbotron {
        color: white;
        background-image: url("../public/images/homepage .png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 128.5vh;
      }
      .checkin{
        color: #9389E1;
        text-align: center;
      }
      .checkin-text{
        color: white;
        text-align: center;
      }
      hr.new1 {
        border-top: 4px solid #DFDCF3;
        width: 100px;
        margin-left: 795px;
      }
      .counsellor-img{
        width: 1000px;
      }
      .feedback-img{
        width: 1700px;
      }
      .icon{
        width: 50px;
      }
    </style>
  </head>
  <body>
<!-- Nav bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #9389E1 !important;">
<div class="container-fluid">
<h2><b>ReLife</b></h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="<?php echo URLROOT; ?>/pages/home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo URLROOT; ?>/pages/checkIn">Check-In</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo URLROOT; ?>/feeds/journal">Journaling</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="adminpg/Admin/login.php">User</a>

    </li>
  </ul>
  <form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-dark" type="submit">Search</button>
  </form>
</div>
</div>
</nav>
<!-- nav bar end -->
<!-- hero -->
<div class="jumbotron jumbotron-fluid">
<!-- in css -->
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="col text-center">
  <h2 class="checkin"><b> Check In <b/></h2>
    <hr class="new1">
    <br>
    <h4 class="checkin-text"> Express your feelings with us.</h4>
<h4 class="checkin-text">Let us know how are you feeling today and </h4>
<h4 class="checkin-text">anything you want to share with us  </h4>
<br>
<br>
<a href="<?php echo URLROOT; ?>/pages/checkIn" class="btn btn-primary btn-lg" style="background-color: #9389E1 !important; color: Black; text-align: center;"><b>Get Started ></b></a>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h2 class="checkin"><b> Consult with Our Counsellors <b/></h2>
  <hr class="new1">
  <br>
  <img class="counsellor-img" src="../public/images/Group 10.png"/>
  <br>
  <br>
  <br>
  <a href="../app/chatSystem/index.php" class="btn btn-primary btn-lg" style="background-color: #9389E1 !important; color: Black; text-align: center;"><b>Chat with your counsellor ></b></a>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <h2 class="checkin"><b> Journal Your Thoughts <b/></h2>
    <hr class="new1">
    <br>
    <h4 class="checkin-text">Journal your thoughts in our e-journal,</h4>
<h4 class="checkin-text">its a safe place for you to express</h4>
<h4 class="checkin-text">your feelings fully!</h4>
<br>
<br>
<a href="<?php echo URLROOT; ?>/feeds/journal" class="btn btn-primary btn-lg" style="background-color: #9389E1 !important; color: Black; text-align: center;"><b>Get Started ></b></a>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<img class="feedback-img" src="../public/images/Group 11.png"/>
<br>
<br>
<a href="<?php echo URLROOT; ?>/feeds/feedback" class="btn btn-primary btn-lg" style="background-color: #9389E1 !important; color: Black; text-align: center;"><b>Give feedback ></b></a>
</div>
<br>
<br>
<br>
<!-- Footer -->
<footer class="bg-dark text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase" style="color:white;">About Us</h5>

        <p style="color:white;">
          A mental health app which helps people to share their thoughts and get therapy from renowned counselors .
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0" style="color:white;">
        <h5 class="text-uppercase">Contact Us</h5>

        <ul class="list-unstyled mb-0" >
          <li>
            <a href="#!" class="text-dark"> <p style="color:white;">e-mail-relife@gmail.com</p></a>
          </li>
          <li>
            <a href="#!" class="text-dark"> <p style="color:white;">contact number-+601137778432</p></a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
    <!--  <div class="col-lg-3 col-md-6 mb-4 mb-md-0" style="color:white;">
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled mb-0" >
          <li>
            <a href="#!" class="text-dark"> <p style="color:white;">Link 1</p></a>
          </li>
          <li>
            <a href="#!" class="text-dark"> <p style="color:white;">Link 2</p></a>
          </li>
          <li>
            <a href="#!" class="text-dark"><p style="color:white;">Link 3</p></a>
          </li>
          <li>
            <a href="#!" class="text-dark"><p style="color:white;">Link 4</p></a>
          </li>
        </ul>
      </div>-->
      <!--Grid column-->
    </div>
    <!--Grid row-->
    <p style="color:white;">Connect With US</p><br>
    <img class="icon" src="../public/images/Image 7.png"/> <img class="icon" src="../public/images/Image 8.png"/> <img class="icon" src="../public/images/Image 9.png"/>
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
  <p style="color:white;">  © 2020 Copyright: </p>
    <a class="text-dark" href="#"><p style="color:white;">---</p></a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
</html>
