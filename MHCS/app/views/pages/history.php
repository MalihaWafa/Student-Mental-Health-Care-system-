<!-- By G A Rubayat Hyder
A17CS5335 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        html {    
    background: url('../images/BGhistory.png') no-repeat center fixed;     
    background-size: cover;
    opacity: 0.93;
            }
    </style>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:ital,wght@0,400;1,400;1,500;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>History</title>
</head>



<body>
    
    <!-- The Class 'container' contains the entire content of the project -->
    <div class="container">

        <!-- Navbar -->
      <div class="open-navbar-icon navbar-icon center">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
      <div class="navbar-wrapper">
        <nav class="navbar">
          <div class="close-navbar-icon navbar-icon center">
            <div class="line line-1"></div>
            <div class="line line-2"></div>
          </div>
          <div class="nav-list">
            <a href="<?php echo URLROOT; ?>/pages/home" class="nav-link center">Home</a>
            <a href="<?php echo URLROOT; ?>/pages/showProfile" class="nav-link center">Profile</a>
            <a href="<?php echo URLROOT; ?>/pages/checkIn" class="nav-link center">Check-In</a>
            <a href="#" class="nav-link center">History</a>
            <a href="<?php echo URLROOT; ?>/feeds/feedback" class="nav-link center">Feedback</a>
            <a href="<?php echo URLROOT; ?>/users/logout" class="nav-link center">SignOut</a>
          </div>
        </nav>
      </div>
      <!-- End of Navbar -->

        

        <!-- Cards -->
      <section class="card-top">
        <h1 class="card-heading">History</h1>

        <div class="flex-container">
            <a href="<?php echo URLROOT; ?>/logs/moodLog"><div class="flex-item-left"><img src="../images/moodH.PNG" alt="smile"></div></a>
            <a href="<?php echo URLROOT; ?>/logs/thoughtLog"><div class="flex-item-right"><img src="../images/journalH.PNG" alt="smiling"></div></a>
          </div>
      </section>

      <!-- End of Cards -->

        


    </div><!-- End of Class container -->
    














    <!-- Calling the script -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/react/17.0.1/umd/react.production.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/react-dom/17.0.1/umd/react-dom.production.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/classnames/2.2.6/index.min.js"></script>
    <script type="text/javascript" src="../public/javascript/script.js"></script>

</body>


</html>