<!DOCTYPE html>
<html lang="en">
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
 

  <!-- Favicons -->
  <link href="assets/img/ch.png" rel="icon">
  <link href="assets/img/ch.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

    <body>
	<!-- ======= Header ======= -->
  <header id="header">
    <nav>
      <div class="logo"><img src="assets/images/icon/logo.jpg" alt="logo"></div>
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="subjects/jee.php">Nos Formations</a></li>
        <li><a class="active" href="pub.php">Nos Portfolio</a></li>
        <li><a href="inscrit/index.php">Certification</a></li>
        <li><a href="about.php">A Propos</a></li>
        <li><a href="#services_section">Services</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    <!--
      <div class="srch"><input type="text" class="search" placeholder="Rechercher ici..."><img src="assets/images/icon/search.png" alt="Rechercher" onclick=slide()></div>
      <a class="get-started" href="inscrit/index.php">Inscrivez-vous</a>
      <img src="assets/images/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu">
    </nav> -->
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
  </header><!-- End Header -->


  <!-- les carrousels -->
  
  <div class="section-title">
    
  <h3> <div class="breadcrumbs"> Quelques meilleurs université
  <div class="container" data-aos="fade-up"></div>
  </div> </h3>
         <!-- <h1>Quelques Meilleurs Université </h1>-->
          
        </div>

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./assets/img/portfolio/isa.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Université Technolab-ISTA</h5>
        <p>l'université Technolab-ISTA est l'un des meilleurs université du Mali.Il nous 
          offres des meilleurs formations de qualité.
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./assets/img/portfolio/uie.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>UIE</h5>
        <p>L'université Tuniso-Mali, UIE est une université qui  nous offre des formations sur le  système 
          d'education Tuniso-Mali.
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./assets/img/portfolio/FSEG.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Faculté des Sciences Economique et Gestion</h5>
        <p>Les ressorissants de la série science Economique du lycée peuvent rejoindre la FSEG 
          pour continuer leur cursus Universitaire.
        </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!--  <div class="section-title">
          <h1>Les Meilleurs Etablissement</h1>
          
        </div>---->

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/isim1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Institut Superieur d'Informatique et de Management</h4>
                <p>ISIM</p>
                <div class="portfolio-links">
                  <a href="assets/img/pub/isim1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                  <a href="isim.php" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/tecnolab.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Institut de Science et de Technologie Applique</h4>
                <p>Technolab-ISTA</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/tecnolab.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="Technolab-ISTA.php" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/asmaou.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Complexe Scolaire Asmaou </h4>
                <p>LPFA-ABA</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/asmaou.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                  <a href="Asmaou.php" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/uie.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Universite Internationale d'Exellence</h4>
                <p>UIE</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/uie.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                  <a href="uie.php" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/iug.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Institut Universitaire de Gestion</h4>
                <p>IUG</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/iug.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                  <a href="iug.php" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/FSEG.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Faculte de Science Economique et Gestion</h4>
                <p>FSEG</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/FSEG.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                  <a href="publicite.php" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/esgic1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Ecole Superieur de Gestion d'Informatique et de la Comptabilité</h4>
                <p>ESGIC</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/esgic.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
                  <a href="esgic.php" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/isc.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Institut Superieur de Comptabilite</h4>
                <p>ISC</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/isc.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
                  <a href="isc.php"title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/isa.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Institut de Science Applique</h4>
                <p>ISA</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/isa.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="publicite.php" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Portfolio Section -->
        
      <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Temoingnages</h2>
          <p>Quelques temoingnages</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/temoignage/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>IBRAHIM BERTHE</h3>
                  <h4>Ingenieur &amp; Graphisme</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                   Je tiens a remercier le developpeur de l'application eMalSchool, car il nous aide dans notre travail, en nous                               informant des dates et heurs des examens en suivant la progression de l'enseignement au Mali c'est une très bonnes                        initiaitive.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/temoignage/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>MARIAM FOFANA</h3>
                  <h4>Promotrice</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Avec le E-kalanso chaque malien à le droit d'etudier hors de la classe. cette application est riche en leçons, en                             astuces et tutoriels qui sont des facteurs capitales dans notre apprentissages.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/temoignage/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>MOUHAMED BERTHE</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    L'application E-kalanso me permet de faire des recherches, le telechargement des cours en format numerique,                          E-kalanso est une très bonne plateforme pour l'education malienne .
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/temoignage/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>OUSMANE DIABATE</h3>
                  <h4>Formateur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    L'application E-kalanso me permet de faire des recherches, le telechargement des cours en format numerique, E-kalanso est une très bonne plateforme pour l'education malienne.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/temoignage/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>AMADOU MARIKO</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    L'application E-kalanso me permet de faire des recherches, le telechargement des cours en format numerique,                         E-kalanso est une très bonne plateforme pour l'education malienne .
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  
   <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <!--<h3>E-kalanso</h3>-->
            <h6 class="logo me-auto"><a href="index.php"><img src="assets/img/logo/logka.jpg" class="img-fluid" alt=""></a></h6>
            <p> <br>
               Hamdallaye ACI 2000 Imm.Balde; <br>
              BAMAKO/MALI<br><br>
              <strong>Telephone:</strong> +22360607305 / +22377646425<br>
              <strong>Email:</strong>ekalanso61@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <!--<h4>Useful Links</h4>-->
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="courses.php">Cours</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="trainers.php">Formateurs</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="events.php">Evenements</a></li>
               <li><i class="bx bx-chevron-right"></i> <a href="about.php">A propos de Nous</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contacts</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos Formations</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Developpement web</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Conception des apllications </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Gestion commercial</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphisme</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Faites nous part de vos suggestion</h4>
            <p>Nous tenterons d'être plus attentif et ouvert envers vous</p>
            <form action="ekalanso61@gmail.com" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>E-kalanso</span></strong>. Tout droits reserves
          Prod by<a href="younglabs223.com">YoungLabs</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://twitter.com/home" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.telegram.com/" class="telegram"><i class="bx bxl-telegram"></i></a>
      <!--  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>-->
      </div>
    </div>
  </footer><!-- End Footer -->
       
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>
</html>