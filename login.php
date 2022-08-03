<?php
  require "header.php";
  ?>
  <main>
    <h1>Signin</h1>
    <?php
    if (isset($_GET['error'])){
      if ($_GET['error']=="emptyfields"){
        echo '<div class="alert alert-danger" role="alert">Fill in all fields !</div>';
      }else if ($_GET['error']=="wrongpwd"){
        echo '<div class="alert alert-danger" role="alert">Wrong password!</div>';
      }else if ($_GET['error']=="nomatch"){
        echo '<div class="alert alert-danger" role="alert">There\'s no match for your email !</div>';

    }elseif (isset($_GET['login']) ) {
      if ($_GET['signup']=="success")
        echo '<div class="alert alert-success" role="alert">Sign in Successful !</div>';
    }
}?>

<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="assets/images/icon/favicon.png">
	<title>Inscription</title>
	<link rel="stylesheet" type="text/css" href="loginStyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- It will redirect to the Home Page after submitting the form -->
  <script>
  $(document).ready(function(){
    $("form").submit(function(){
      alert("Succès!");
    });
  });
  </script>
</head>
<body>
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" id="log" onclick="login()" style="color: #fff;">S'identifier</button>
				<button type="button" class="toggle-btn" id="reg" onclick="register()">S'incrire</button>
			</div>
			<div class="social-icons">
				<img src="assets/images/icon/fb2.png">
				<img src="assets/images/icon/insta2.png">
				<img src="assets/images/icon/tt2.png">
			</div>
			
			<!-- Login Form -->
			<form id="login" class="input-group" action="includes/login.inc.php" method="post">
				<div class="inp">
					<img src="assets/images/icon/user.png">
					<input type="email" name="mailuid" class="input-field" placeholder="nom d'utilisateur/E-mail" style="width: 88%; border:none;" required="required" value="<?php if (isset($_GET['error'])){
                          if ($_GET['error']=="wrongpwd" || $_GET['error']=="emptyfields"){
                                echo  isset($_GET['mail'])?$_GET['mail']:'';
                          }else {
                                echo '';
                               }
      }  ?>">
				</div>
				<div class="inp">
					<img src="assets/images/icon/password.png"><input  type="password" name="pwd" class="input-field" placeholder="Mot de passe" style="width: 88%; border: none;" required="required">
				</div>
				<input type="checkbox" class="check-box">Se Souvenir
				<button type="submit" class="submit-btn">Connection</button>
				<!--<button type="submit" class="">Mot de oublié</button>-->
			</form>


			<div class="other" id="other">
				<div class="instead">
					<h3>or</h3>
				</div>
				<button class="connect" onclick="google()">
					<img src="assets/images/icon/google.png"><span>Se Connecter avec Google</span>
				</button>
			</div>

			<?php require "footer.php";
			?>
			<!-- Registration Form -->
			<?php
  require "header.php" ;
 ?>

     <main>
       
        <?php
        if (isset($_GET['error'])){
          if ($_GET['error']=="emptyfields"){
            echo '<div class="alert alert-danger" role="alert">Fill in all fields !</div>';
          }else if ($_GET['error']=="invalidmailuid"){
            echo '<div class="alert alert-danger" role="alert">Invalid username and e-mail !</div>';
          }else if ($_GET['error']=="invaliduid"){
            echo '<div class="alert alert-danger" role="alert">Invalid username !</div>';
          }else if ($_GET['error']=="invalidmail"){
            echo '<div class="alert alert-danger" role="alert">Invalid e-mail !</div>';
          }else if ($_GET['error']=="passwordcheck"){
            echo '<div class="alert alert-danger" role="alert">Your passwords do not match !</div>';
          }else if ($_GET['error']=="usertaken"){
            echo '<div class="alert alert-danger" role="alert">Username is already taken !</div>';
          }
        }elseif (isset($_GET['signup']) ) {
          if ($_GET['signup']=="success")
            echo '<div class="alert alert-success" role="alert">Signup Successful !</div>';
        }
         ?>
			<form id="register" class="input-group">
				<input type="text" class="input-field" placeholder="Nom Complet" required="required" value="<?php if (isset($_GET['error'])){
                  if ($_GET['error']=="invalidmail" || $_GET['error']=="passwordcheck" || $_GET['error']=="emptyfields"){
                    echo  isset($_GET['uid']) ? $_GET['uid']:'';
                  }else {
                    echo '';
                  }
                }  ?>">
				<input type="text" name="uid" class="input-field" placeholder="Email" required="required" value="<?php if (isset($_GET['error'])){
                if ($_GET['error']=="invaliduid" || $_GET['error']=="passwordcheck" || $_GET['error']=="emptyfields"){
                  echo  isset($_GET['mail']) ? $_GET['mail']:'';
                }else {
                  echo '';
                }
              }  ?>">
				<input type="password" class="input-field" placeholder="Mot de passe" name="psame" required="required">
				<input type="password" class="input-field" placeholder="Confirmer mot de passe" name="psame" required="required">
				<input type="checkbox" class="check-box" id="chkAgree" onclick="goFurther()">I agree to the Terms & Conditions
				<button type="submit" id="btnSubmit" class="submit-btn reg-btn">S'inscrire</button>
			</form>
		</div>
		<script type="text/javascript" src="script.js"></script>
</body>
</html>

<?php
  require "footer.php";
  ?>