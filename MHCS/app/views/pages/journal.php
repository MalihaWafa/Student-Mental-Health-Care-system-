<!-- By Maliha Shahed
     A18CS4022 -->
<!DOCTYPE html>
<html lang="en">
<!-- add php part -->


  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
      <title>Journaling</title>


      <style>
        body{
          background-image: url("../images/journal-bg.jpg");
          background-color:black;
          background-repeat: no-repeat;
          background-size: 100%;
        }
        .link{
          color: Black;
        }
        .jumbotron {
          color: white;
          background-image: url("img/bg.jpg");
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          height: 128.5vh;
        }

        hr.new1 {
          border-top: 4px solid #DFDCF3;
          width: 100px;
          margin-left: 795px;
        }
        .form-floating
		    {
					width:1530px;
					height:500px;
				}

				.align {

         margin: auto;
         width: 60%;
         padding: 10px;

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
            <a class="nav-link" href="">Journaling</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="">User</a>
          </li>
                </ul>
          </li>
        </ul>
      </div>
      </div>
      </nav>
      <!-- Nav bar ends -->
      <!-- journaling box-->
        <!--  <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 50px" position="center"></textarea>
        <label for="floatingTextarea2">write your heart out!</label>

        <div class="good_div"><button type="submit" class="good_submit">Submit</button></div>

          </form>

      </div>-->
        <!-- journaling box ends-->

       <form method="POST" action="<?php echo URLROOT; ?>/feeds/journal">


      <div class="align">
  	  <b>Journal Name</b>
  		<input type="text" name="journalName" placeholder="Give your journal a name" class="form-control"/>

      <b>Counsellor Name</b>
      <input type="text" name="counsellorName" placeholder="write your counsellor's name"  class="form-control"/>

			<b>Write your heart out!</b>
            <span class="help-block">
                <?php echo $data['nullError'];?>                    <!--Notifies User upon inputting incorrect data -->
            </span>

			<textarea class="form-control" name="journal" placeholder="Write your thoughts" id="floatingTextarea2" style="height: 50px" position="center"></textarea>

			<br>

     	<input type="submit" class="btn btn-primary" value="Submit" name="add" position="center">

     </form>
		 </div>




      </body>
      </html>
