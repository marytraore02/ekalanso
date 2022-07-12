<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form e-kalanso</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/style2.css">
</head>
<body>

    <div class="main">

    <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
<div class="container">
      <div class="signup-content">
                    <!--<form method="POST" id="signup-form" class="signup-form">-->
         <form action="connect.php" method="post">
             <h2 class="form-title">Creation de compte</h2>
               <!--  <div class="form-group">-->
                  <input type="text" class="form-input" name="Nom" id="Nom" placeholder="Votre Nom"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Votre Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Votre mot de passe"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <!--<div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>-->
                        <input type="submit" class="btn btn-primary">
                        <!--<div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="valider"/>
                        </div>-->
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="#" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/js/main2.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>