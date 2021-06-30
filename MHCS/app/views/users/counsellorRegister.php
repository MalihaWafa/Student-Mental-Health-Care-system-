<!-- Ashraful Islam -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Counsellor Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../public/css/styleA.css">
</head>
<body>

    <div class="main">

    <!-- Sign up form -->
    <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up as a Counsellor</h2>
                        
                        
                        
                        <!-- The actual form -->
                        <form action="<?php echo URLROOT; ?>/counsellors/counsellorRegister" method="POST" class="register-form" id="register-form">
                            
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="username" id="username" placeholder="Your Username"/>
                                <span class="help-block">
                                    <?php echo $data['usernameError'];?>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="email" id="email" placeholder="Your Email"/>
                                <span class="help-block">
                                    <?php echo $data['emailError'];?>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                                <span class="help-block">
                                    <?php echo $data['passwordError'];?>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Repeat your password"/>
                                <span class="help-block">
                                <?php echo $data['confirmPasswordError'];?>
                                </span>
                            </div>


                            

                            
                    
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../public/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="<?php echo URLROOT; ?>/counsellors/counsellorLogin" class="signup-image-link">I am already member</a>  <br><br>
                        <a href="<?php echo URLROOT; ?>/users/register" class="signup-image-link">Sign Up as a Student</a>
                    </div>
                </div>
            </div>
        </section>

</div>



<!-- JS -->
<script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>