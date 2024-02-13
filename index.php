<?=require 'auth.php'?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Acceuil</title>
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,400,500,700%7CZilla+Slab:300,400,500,700,700i%7CGloria+Hallelujah">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<<<<<<< HEAD:index.html
    <a class="banner banner-top"  target="_blank"></a>
    <div class="preloader">
      <div class="preloader-logo"><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/eduscore-high-resolution-logo (2) (1).png" alt="" margin-left= "800" width="245" height="50"/><img class="brand-logo-light" src="images/logo-inverse-245x50.png" alt="" width="245" height="50"/></a>
=======
    <div class="preloader">
      <div class="preloader-logo"><a class="brand" href="index.php"><img class="brand-logo-dark" src="images/logo.png" alt="" margin-left= "800" width="245" height="50"/><img class="brand-logo-light" src="images/logo.png" alt="" width="245" height="50"/></a>
>>>>>>> 121bcf36bb9fea0feb75573051edd8c022da47e9:index.php
      </div>
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.php"><img class="brand-logo-dark" src="images/logo.png" alt="" margin-left= -300 width="500" height="100" /></a>
                  </div>
                </div>
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Nav		-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php">Acceuil</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="about.html">A propos</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="quiz.html">Quiz</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Contacts</a>
                    </li>
                    <?php
                    if($username !== null) {
                      ?>
                      <li class="rd-nav-item"><?=$username?> &nbsp;<a class="rd-nav-link" href="logout.php">Logout</a>
                      </li>
                      <?php
                    }
                    ?>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
<?php
if($username === null) {
// User is not logged in, show the login form
?>
<div class="login-form">
  <form action="index.php" method="POST">
    <div class="title">Authentification</div>
    <?php
    if ($message) {
      echo "<div class='sub-title'>$message</div>";
    }
    ?>
    <div class="content">
      <div class="input-field">
        <input required type="text" name="username" placeholder="Nom d'utilisateur">
      </div>
      <div class="input-field">
        <input required type="password" name="password" placeholder="Mot de passe">
      </div>
    </div>
    <div class="action">
      <input type='submit' name='register' value="Creer un compte">
      <input type='submit' name='login' value="S'authentifier">
    </div>
  </form>
</div>
<?php
} else {
?>
      <section>
          <div>
            <img src="images/White Grey Black Minimalist Student Instagram Post.png" alt="">
          </div>
      </section>
      <!-- A Few Words About Me-->
      <section class="section section-lg bg-gray-100">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-12">
              <h3 class="h-custom-1 f1">Une petite description à propos de nous</h3>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeIn">
              <p>Nous permettons aux étudiants de tester leurs connaissances après chaque partie de cours, de suivre leur évolution, et d'accéder à des ressources complémentaires en cas de besoin</p><a class="button button-primary-gradient" href="#"><span>Lire plus</span></a>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay=".2s">
              <!-- Linear progress bar-->
              <article class="progress-linear">
                <div class="progress-header">
                  <p>Java</p><span class="progress-value">75</span>
                </div>
                <div class="progress-bar-linear-wrap">
                  <div class="progress-bar-linear"></div>
                </div>
              </article>
              <!-- Linear progress bar-->
              <article class="progress-linear">
                <div class="progress-header">
                  <p>Python</p><span class="progress-value">33</span>
                </div>
                <div class="progress-bar-linear-wrap">
                  <div class="progress-bar-linear"></div>
                </div>
              </article>
              <!-- Linear progress bar-->
              <article class="progress-linear">
                <div class="progress-header">
                  <p>Html</p><span class="progress-value">88</span>
                </div>
                <div class="progress-bar-linear-wrap">
                  <div class="progress-bar-linear"></div>
                </div>
              </article>
              <!-- Linear progress bar-->
              <article class="progress-linear">
                <div class="progress-header">
                  <p>RO</p><span class="progress-value">75</span>
                </div>
                <div class="progress-bar-linear-wrap">
                  <div class="progress-bar-linear"></div>
                </div>
              </article>
              <!-- Linear progress bar-->
              <article class="progress-linear">
                <div class="progress-header">
                  <p>PNL</p><span class="progress-value">50</span>
                </div>
                <div class="progress-bar-linear-wrap">
                  <div class="progress-bar-linear"></div>
                </div>
              </article>
            </div>
            <div class="col-xl-4 wow fadeIn" data-wow-delay=".4s"><img class="img-rounded" src="images/logo.png" alt=""></div>
          </div>
        </div>
      </section>
      <!-- Featured Projects-->
      <section class="section section-lg bg-default text-center">
        <div class="container">
          <h2 class="wow fadeIn">Nos cours</h2>
          <div class="row row-30 row-md-50 row-xl-70">
            <div class="col-sm-6 col-lg-4 wow fadeIn">
              <!-- Post Minimal-->
              <div class="post-minimal">
                <figure class="post-minimal-media"><a href="#"><img class="post-minimal-image" src="images/Java.png" alt="" width="370" height="260"/></a></figure>
                <div class="post-minimal-meta">
                  <ul class="list-inline">
                    <li class="list-inline-item">Professeur: </li>
                    <li class="list-inline-itema"><a href="#">M.TABII</a></li>
                  </ul>
                </div>
                <h4 class="post-minimal-title"><a href="#">Java course</a></h4>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".2s">
              <!-- Post Minimal-->
              <div class="post-minimal">
                <figure class="post-minimal-media"><a href="#"><img class="post-minimal-image" src="images/javascript.png" alt="" width="370" height="260"/></a></figure>
                <div class="post-minimal-meta">
                  <ul class="list-inline">
                    <li class="list-inline-item">Professeur: </li>
                    <li class="list-inline-itema"><a href="#">M.Belhmer</a></li>
                  </ul>
                </div>
                <h4 class="post-minimal-title"><a href="#">JavaScript Course</a></h4>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".4s">
              <!-- Post Minimal-->
              <div class="post-minimal">
                <figure class="post-minimal-media"><a href="#"><img class="post-minimal-image" src="images/python.png" alt="" width="370" height="260"/></a></figure>
                <div class="post-minimal-meta">
                  <ul class="list-inline">
                    <li class="list-inline-item">Professeur: </li>
                    <li class="list-inline-itema"><a href="#">M.Doumi</a></li>
                  </ul>
                </div>
                <h4 class="post-minimal-title"><a href="#">Python Course</a></h4>
              </div>
            </div>
            </div>
          </div><a class="button button-lg button-primary-gradient wow fadeIn" data-wow-delay=".2s" href="isga.ma"><span>Voir tous les cours</span></a>
        </div>
      </section>    
<?php
}
?>
      <footer class="section footer-classic bg-gray-950">
        <div class="footer-classic-main ">
          <div class="container"> 
            <div class="row row-30">
              <div class="col-lg-3">
                <div class="row row-30 row-xl-40">
                  <div class="col-6 col-md-3 col-lg-12">
                    <article class="counter-minimal">
                      <div class="counter-minimal-counter">
                        <div class="counter">97</div><span class="counter-postfix">%</span>
                      </div>
                      <p class="counter-minimal-title">Diplomés</p>
                    </article>
                  </div>
                  <div class="col-6 col-md-3 col-lg-12">
                    <article class="counter-minimal">
                      <div class="counter-minimal-counter">
                        <div class="counter">30</div><span class="counter-postfix">+</span>
                      </div>
                      <p class="counter-minimal-title">Professeurs certifiés</p>
                    </article>
                  </div>
                  <div class="col-6 col-md-3 col-lg-12">
                    <article class="counter-minimal">
                      <div class="counter-minimal-counter counter">8</div>
                      <p class="counter-minimal-title">Campus des étudiants</p>
                    </article>
                  </div>
                  <div class="col-6 col-md-3 col-lg-12">
                    <article class="counter-minimal">
                      <div class="counter-minimal-counter counter">650</div>
                      <p class="counter-minimal-title">Etudiants</p>
                    </article>
                  </div>
                </div>
              </div>
              
              <div class="col-sm-6 col-lg-5 col-xl-4">
                <div class="row row-50 row-xl-70">
                  <div class="col-12">
                    <h3>A propos de nous</h3>
                    <p>Nous permettons aux étudiants de tester leurs connaissances après chaque partie de cours, de suivre leur évolution, et d'accéder à des ressources complémentaires en cas de besoin.</p>
                  </div>
                  <div class="col-12">
                    <h3>Envoi de mails</h3>
                    <p>Veillez entrer votre email pour s'inscrire à notre newsletter.</p>
                    <!-- RD Mailform-->
                    <form class="rd-form rd-mailform form-inline subscribe-form" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                      <div class="form-wrap">
                        <input class="form-input" id="subscribe-form-2-email" type="email" name="email" data-constraints="@Email @Required">
                        <label class="form-label" for="subscribe-form-2-email">E-mail</label>
                      </div>
                      <div class="form-button">
                        <button class="button button-primary-gradient button-icon-only" type="submit" aria-label="subscribe"><span class="icon icon-md mdi mdi-email-outline"></span></button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-classic-aside">
          <div class="container">
            <!-- Rights-->
            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>All Rights Reserved.</span><span>&nbsp;</span><br class="d-sm-none"/><a href="#">Terms of Use</a><span> and</span><span>&nbsp;</span><a href="#">Privacy Policy</a>. Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com/">TemplateMonster</a></p>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by Drel-->
  </body>
</html>