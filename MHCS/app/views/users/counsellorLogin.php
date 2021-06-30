<!-- Ashraful Islam -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counsellor Login</title>
    <!--Font awesome kit-->
    <script src="https://kit.fontawesome.com/7887806c2e.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

    <!--Bootsrap 4 CDNs-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css?ts=<?=time()?>" />
    <!--This was added because the CSS was not updating as it was loading from browser cache-->
    
    
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../public/css/styleA.css">
</head>






<body>
    
    <!-- Sing in Form Divs-->
    <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="../public/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="<?php echo URLROOT; ?>/counsellors/counsellorRegister" class="signup-image-link">Create a Counsellor account</a><br><br>
                        <a href="<?php echo URLROOT; ?>/users/login" class="signup-image-link">Sign in as a Student</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In as a Counsellor</h2>
                        
                        <!-- The Actual Form -->
                        <form action="<?php echo URLROOT; ?>/counsellors/counsellorLogin" method="POST" class="register-form" id="form">    <!--Here we are actua;;y sending the file to Users controller and login method to process-->

                        <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input id="username" type="text" name="username" placeholder="Username">
                                <span class="help-block">
                                    <?php echo $data['usernameError'];?>                    <!--Notifies User upon inputting incorrect data -->
                                </span>
                        </div>

                        <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" id="password" name="password" placeholder="Password"/>
                                <span class="help-block">
                                    <?php echo $data['passwordError'];?>                    <!--Notifies User upon inputting incorrect data -->
                                </span>
                        </div>

                        <!-- Submit Button     -->
                        <div class="form-group form-button">
                                <input type="submit" name="login-submit" id="signin" class="form-submit" value="Log in"/>
                        </div>



                        </form>
                        
                    </div>
                </div>
            </div>
        </section>








    <script src="javascript/script.js"></script>
    <!--Bootstrap 4 Things-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>



    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
