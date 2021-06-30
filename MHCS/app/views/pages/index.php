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
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <title>Landing page</title>
    <style>
      body{
        background-image: url('images/Welomepage.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size:100% 100%;
      }
      .link{
        color: Black;
      }
      .containerRight{
        text-align: right;
        padding-right: 100px;
        padding-top: 250px
      }
    </style>
  </head>
  <body>
<!-- Nav bar -->
  <nav class="navbar navbar-expand-lg">
  <div class="container-fluid hero">
    <h2><b>ReLife</b></h2>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <b><a class="nav-link active link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link" href="<?php echo URLROOT; ?>/users/register">SignUp</a></b>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- nav bar end -->
<div class="containerRight">

                <h2><b>You are not alone</b></h2>
                <h5>It feels great when you know someone is there to listen to you </h5>
                <h5>  We at ReLife ,</b></h5>
                <h5>are not giving up untill everyone dealing with</h5>
                <h5>  mental health problems get support</h5>
                <br>
                <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-outline-dark btn-lg"><b>Get Started ></b></a>

</div>

</body>
</html>
