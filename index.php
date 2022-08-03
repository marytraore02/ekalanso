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
			<!-- === C'EST LA PARTIE NAVBAR====== -->
			<div class="logo"><img src="assets/images/icon/Sans titre-1.jpg" alt="logo"></div>
			<ul>
				<li><a class="active" href="">Accueil</a></li>
				<li><a href="subjects/jee.php">Formations</a></li>
				<li><a href="pub.php">Portfolio</a></li>
				<li><a href="inscrit/index.php">Certification</a></li>
				<li><a href="about.php">A Propos</a></li>
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
					<!-- le petit bouttoun play-->
					<img src="assets/images/icon/play.png" alt="play"><span><a href="https://www.youtube.com/watch?v=KFyrgDO1WXk" target="_blank">Regarder Maintenant</a></span>
				</div>
			</div>
			<div class="svg-image">
				<img src="assets/images/extra/acceuil.png" alt="svg">
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


<!--  Sujets fréquents-->
	<div class="title">
		<span style="color:#046aa7"> LES SUJETS FREQUENTS SUR E-kalanso</span>
	</div>
	<br><br>
	<div class="course">
		<center><div class="cbox">
		<div class="det"><a href="subjects/jee.php"><img src="assets/images/courses/book.png">Matiers Scientifiques</a></div>
		<div class="det"><a href="subjects/gate.php"><img src="assets/images/courses/d1.png">Médecine</a></div>
		<div class="det"><a href="subjects/jee.php#sample_papers"><img src="assets/images/courses/paper.png">Littératures</a></div>
		<div class="det"><a href="subjects/quiz.php"><img src="assets/images/courses/d1.png">Quiz</a></div>
		</div></center>
		<div class="cbox">
		<div class="det"><a href="subjects/computer_courses.php"><img src="assets/images/courses/computer.png">Informatique</a></div>
		<div class="det"><a href="subjects/computer_courses.php#data"><img src="assets/images/courses/data.png">Economies</a></div>
		<div class="det"><a href="subjects/computer_courses.php#algo"><img src="assets/images/courses/algo.png">Algorithmes</a></div>
		<div class="det det-last"><a href="subjects/computer_courses.php#projects"><img src="assets/images/courses/projects.png">Projets</a></div>
		</div>
	</div>

	
     					<!-- ABOUT -->

	<div class="diffSection" id="about_section">

		<center> <div class><img src="assets/images/icon/Sans titre-1.jpg"></div> </center>
		<!--<center><p style="font-size: 50px; padding: 100px">E-KALANSO</p></center> -->
		<div class="about-content">
				<div class="side-image">
					<img class="sideImage" src="assets/images/extra/e3.jpg">
				</div>
				<div class="side-text">
					<h2 style="color:#fff">C'EST QUOI E-Kalanso?</h2>
					<p style="color:#fff">E-kalanso est place une plateforme d’apprentissage en ligne(e-learning) dont l’accès est public c’est-à-dire tout le monde peut apprendre et quiconque souhaite se former, acquérir de nouvelles compétences ou améliorer celles qu’il a déjà peut opter pour une formation.
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
		<p>Nous Progressons Chaque Année</p>
		<div class="smbox">
		<span><center><div class="data">154</div><div class="det">Apprenants</div></center></span>
		<span><center><div class="data">62</div><div class="det">Cours</div></center></span>
		<span><center><div class="data">10</div><div class="det">Partenaires</div></center></span>
		<span><center><div class="data">27</div><div class="det">Projets</div></center></span>
		</div>
	</div>


          <!-- TEAM -->
	<div class="diffSection" id="team_section">
		<center><p style="font-size: 50px; padding-top: 100px; padding-bottom: 60px; color:#58aee1">Les Pros Nous Font Confiance</p></center>
		<div class="totalcard">
			<div class="card">
				<center><img src="assets/images/creator/roshan1.jpeg"></center>
				<center><div class="card-title">Cheik Oumar Doumbia</div>
				<div id="detail">
					<p>“ Je tiens a remercier le developpeur de l'application e-kalanso, car il nous aide dans notre travail, en nous informant des dates et heurs des examens en suivant la progression de l'enseignement au Mali c'est une très bonnes initiaitive.“</p>
					<div class="duty"></div>
					<a href="" target="_blank"><button class="btn-roshan">Suivre +</button></a>
				</div>
				</center>
			</div>
			<div class="card">
				<center><img src="assets/images/creator/roshan2.jpeg"></center>
				<center><div class="card-title">Mariam Fofana</div>
				<div id="detail">
					<p>“ Avec le e-akalanso chaque malien à le droit d'etudier hors de la classe. cette application est riche en leçons, en astuces et tutoriels qui sont des facteurs capitales dans notre apprentissages. “</p>
					<div class="duty"></div>
					<a href="" target="_blank"><button class="btn-akhil">Suivre +</button></a>
				</div>
				</center>
			</div>

		 	<div class="card">
				<center><img src="assets/images/creator/humanNotExist4.jpg"></center>
				<center><div class="card-title">Mariam Fofana</div>
				<div id="detail">
					<p>“ Avec le e-akalanso chaque malien à le droit d'etudier hors de la classe. cette application est riche en leçons, en astuces et tutoriels qui sont des facteurs capitales dans notre apprentissages.“ </p>
					<div class="duty"></div>
					<a href="" target="_blank"><button class="btn-akhil">Suivre +</button></a>
		</div>
	</div>
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

<!-- Reviews by Students -->
<div id="makeitfull">
	<a href="#review_section"><img src="assets/images/icon/makeitfull.png"></a>
</div>
<div class="review">
	<div class="diffSection" id="review_section">
		<center><p style="font-size: 40px; padding: 100px; padding-bottom: 40px; color: #2E3D49;">What the Students Say About Us?</p></center>
	</div>
	<div class="rev-container">
		<div class="rev-card">
			<div class="identity">
				<img src="assets/images/creator/humanNotExist1.jpg"><p>Sophie Daniel</p>
				<h6>Java</h6>
				<div class="rating"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					I did Java Fundamenetal course with Rishab Sir. It was a great experience. The brain teasers and assignments, actually the whole lot of content was really good. Some problems were challenging yet interesting. Was explained very well where ever I stuck...
				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="assets/images/creator/humanNotExist2.jpg"><p>Clayton Clair</p>
				<h6>C/C++</h6>
				<div class="rating"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					When I was watching "Dear Zindagi", I could relate Sharukh Khan to Arnav Bhaiya. The way Sharukh Khan was giving life lessons to Alia Bhatt, in the same way Arnav Bhaiya will give coding life lessons which will guide you throughout your code life...
				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="assets/images/creator/humanNotExist3.jpg"><p>Devyn Sethi</p>
				<h6>JEE</h6>
				<div class="rating"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					LearnEd was an amazing experience for me. I belong to electronics department and had a little experience in coding but I think it has helped me think things through in a much more analytical manner. Coding is important no matter which branch you are in. It gives you a better understanding about how to approach a problem...
				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="assets/images/creator/humanNotExist4.jpg"><p>Rylee Phillips</p>
				<h6>Python</h6>
				<div class="rating"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					This was my first complete course at coding blocks. I attended the Python course in Winter 2020 and loved it which made me join the full course. Shubham bhaiya and Ayush Bhaiya(TA) have good knowledge about the field and were very helpful in making us understand the concepts. I would certainly recommend this to anyone...
				</p>
			</div>
		</div>
	</div>
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


<!-- FEEDBACK -->
	<div class="title2" id="feedBACK">
		<span>Give Feedback</span>
		<div class="shortdesc2">
			<p>Please share your valuable feedback to us</p>
		</div>
	</div>

	<div class="feedbox">
		<div class="feed">
			<form action="mailto:roshank9419@gmail.com" method="post" enctype="text/plain">
				<label>Your Name</label><br>
				<input type="text" name="" class="fname" required="required"><br>
				<label>Email</label><br>
				<input type="email" name="mail" required="required"><br>
				<label>Additional Details</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Send Message</button>
			</form>
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