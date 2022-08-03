<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="assets/images/icon/favicon.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>E-kalanso</title>
	<meta name="desciption" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script>
		$(window).on('scroll', function(){
  			if($(window).scrollTop()){
  			  $('nav').addClass('black');
 			 }else {
 		   $('nav').removeClass('black');
 		 }
		})
	</script>
</head>
<body>
<!-- Navigation Bar -->
	<header id="header">
		<nav>
			<div class="logo"><img src="assets/images/icon/logo.jpg" alt="logo"></div>
			<ul>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="subjects/jee.php">Nos Formations</a></li>
				<li><a href="pub.php">Nos Portfolio</a></li>
				<li><a href="inscrit/index.php">Certification</a></li>
				<li><a class="active" href="about.php">A Propos</a></li>
				<li><a href="#services_section">Services</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
			<div class="srch"><input type="text" class="search" placeholder="Rechercher ici..."><img src="assets/images/icon/search.png" alt="Rechercher" onclick=slide()></div>
			<a class="get-started" href="inscrit/index.php">Inscrivez-vous</a>
			<img src="assets/images/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu">
		</nav>
		<div class="head-container">
			<div class="quote">
				<p>"L'école de l'innovation et de la créativité Malienne".</p>
				<h5>Avec e-kalanso, c'est l'accessibilté total de l'éducation partout pour tout le monde! </h5>
				<div class="play">
					<img src="assets/images/icon/play.png" alt="play"><span><a href="https://www.youtube.com/watch?v=KFyrgDO1WXk" target="_blank">Regarder Maintenant</a></span>
				</div>
			</div>
			<div class="svg-image">
				<img src="assets/images/extra/svg1.jpg" alt="svg">
			</div>
		</div>
		<div class="side-menu" id="side-menu">
			<div class="close" onclick="sideMenu(1)"><img src="assets/images/icon/close.png" alt=""></div>
			<div class="user">
				<img src="assets/images/creator/roshan.jpeg" alt="Username">
				<p>roshank9419</p>
			</div>
			<ul>
				<li><a href="#about_section">About</a></li>
				<li><a href="#portfolio_section">Portfolio</a></li>
				<li><a href="#team_section">Team</a></li>
				<li><a href="#services_section">Services</a></li>
				<li><a href="#contactus_section">Contact</a></li>
				<li><a href="#feedBACK">Feedback</a></li>

			</ul>
		</div>
	</header>


	
<!-- ABOUT -->
	<div class="diffSection" id="about_section">
		<center><p style="font-size: 50px; padding: 100px">About</p></center>
		<div class="about-content">
				<div class="side-image">
					<img class="sideImage" src="assets/images/extra/e3.jpg">
				</div>
				<div class="side-text">
					<h2>Quand pensez-vous de nous?</h2>
					<p>E-kalanso est place une plateforme d’apprentissage en ligne(e-learning) dont l’accès sera public c’est-à-dire tout le monde peut apprendre et quiconque souhaite se former, acquérir de nouvelles compétences ou améliorer celles qu’il a déjà peut opter pour une formation.
</p>
				</div>
		</div>
	</div>


<!-- PORTFOLIO -->
	<div class="diffSection" id="portfolio_section">
		<center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px;">Portfolio</p></center>
		<div class="content">
			<p>
				“Education is the passport to the future, for tomorrow belongs to those who prepare for it today.” “Your attitude, not your aptitude, will determine your altitude.” “If you think education is expensive, try ignorance.” “The only person who is educated is the one who has learned how to learn …and change.”
			</p>
		</div>
	</div>
	<div class="extra">
		<p>We're increasing this data every year</p>
		<div class="smbox">
		<span><center><div class="data">154</div><div class="det">Apprenants</div></center></span>
		<span><center><div class="data">62</div><div class="det">Cours</div></center></span>
		<span><center><div class="data">10</div><div class="det">Partenaires</div></center></span>
		<span><center><div class="data">27</div><div class="det">Projets</div></center></span>
		</div>
	</div>




<!-- SERVICES -->
	<div class="service-swipe">
		<div class="diffSection" id="services_section">
		<center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px; color: #fff;">Services</p></center>
		</div>
		<a href="subjects/computer_courses.php"><div class="s-card"><img src="assets/images/icon/computer-courses.png"><p>Des Cours Gratuits</p></div></a>
		<a href="subjects/jee.php"><div class="s-card"><img src="assets/images/icon/brainbooster.png"><p>Les examens Préparatoires</p></div></a>
		<a href="#"><div class="s-card"><img src="assets/images/icon/online-tutorials.png"><p>Des cours vidéos</p></div></a>
		<a href="subjects/jee.php#sample_papers"><div class="s-card"><img src="assets/images/icon/papers.jpg"><p>Des exercices corrigés</p></div></a>
		<a href="#"><div class="s-card"><img src="assets/images/icon/p3.png"><p>Les stages en ligne</p></div></a>
		<a href="#contactus_section"><div class="s-card"><img src="assets/images/icon/discussion.png"><p>Discussion avec Vos professeurs</p></div></a>
		<a href="subjects/quiz.php"><div class="s-card"><img src="assets/images/icon/q1.png"><p>participez aux quiz</p></div></a>
		<a href="#contactus_section"><div class="s-card"><img src="assets/images/icon/help.png"><p>24x7 Support en ligne</p></div></a>
	</div>



<!-- CONTACT US -->
	<div class="diffSection" id="contactus_section">
		<center><p style="font-size: 50px; padding: 100px">Contact Us</p></center>
		<div class="csec"></div>
		<div class="back-contact">
			<div class="cc">
			<form action="mailto:roshank9419@gmail.com" method="post" enctype="text/plain">
				<label>First Name <span class="imp">*</span></label><label style="margin-left: 185px">Last Name <span class="imp">*</span></label><br>
				<center>
				<input type="text" name="" style="margin-right: 10px; width: 175px" required="required"><input type="text" name="lname" style="width: 175px" required="required"><br>
				</center>
				<label>Email <span class="imp">*</span></label><br>
				<input type="email" name="mail" style="width: 100%" required="required"><br>
				<label>Message <span class="imp">*</span></label><br>
				<input type="text" name="message" style="width: 100%" required="required"><br>
				<label>Additional Details</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Send Message</button>
			</form>
			</div>
		</div>
	</div>


<!-- Sliding Information -->
	<marquee style="background: linear-gradient(to right, #FA4B37, #DF2771); margin-top: 50px;" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="20"><div class="marqu">“Education is the passport to the future, for tomorrow belongs to those who prepare for it today.” “Your attitude, not your aptitude, will determine your altitude.” “If you think education is expensive, try ignorance.” “The only person who is educated is the one who has learned how to learn …and change.”</div></marquee>

<!-- FOOTER -->
	<footer>
		<div class="footer-container">
			<div class="left-col">
				<img src="assets/images/icon/logo - Copy.png" style="width: 200px;">
				<div class="logo"></div>
				<div class="social-media">
					<a href="#"><img src="assets/images/icon\fb.png"></a>
					<a href="#"><img src="assets/images/icon\insta.png"></a>
					<a href="#"><img src="assets/images/icon\tt.png"></a>
					<a href="#"><img src="assets/images/icon\ytube.png"></a>
					<a href="#"><img src="assets/images/icon\linkedin.png"></a>
				</div><br><br>
				<p class="rights-text">Copyright © 2021 Created By Roshan Kumar, Abhishek Dulat All Rights Reserved.</p>
				<br><p><img src="assets/images/icon/location.png"> Lovely Professional University<br>Phagwara, Punjab-144401</p><br>
				<p><img src="assets/images/icon/phone.png"> +91-1234-567-890<br><img src="assets/images/icon/mail.png">&nbsp; learnedonline9419@gmail.com</p>
			</div>
			<div class="right-col">
				<h1 style="color: #fff">Our Newsletter</h1>
				<div class="border"></div><br>
				<p>Enter Your Email to get our News and updates.</p>
				<form class="newsletter-form">
					<input class="txtb" type="email" placeholder="Enter Your Email">
					<input class="btn" type="submit" value="Submit">
				</form>
			</div>
		</div>
	</footer>

</body>
</html>