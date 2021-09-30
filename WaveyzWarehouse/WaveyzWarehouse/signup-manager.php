<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FlexStart Bootstrap Template - Index</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.4.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="mainpage.html" class="logo d-flex align-items-center">
      <img src="assets/img/logo.png" alt="">
      <span>Waveyz</span>
    </a>

    <nav id="navbar" class="navbar">

      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->


<section class="signup">
            <div class="container-signup">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title" style="color: #012970;">Sign up as a Manager</h2>
                        <form action="newManager.php" method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="manager_name" id="manager_name" placeholder="Your Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class=""></i></label>
                                <input type="tel" name="manager_contact" id="manager_contact" placeholder="Your Contact Number" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="manager_email" id="manager_email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="manager_pw1" id="manager_pw1" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="manager_pw2" id="manager_pw2" placeholder="Confirm password" required/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="assets/img/signup-image.jpg" alt="sign up image"></figure>
                        <div class="row">
                          <div class="col-8">
                            <p>Already have an account? </p>
                          </div>
                          <div class="col-4">
                            <a href="#" class="signup-image-link">Log In</a>
                          </div>

                        </div>
                        <!--<p style="display: inline-block;">Already have an account? <a href="#" class="signup-image-link">Log In</a></p>-->
                    </div>
                </div>
            </div>
        </section>


<!--<main id="main">
<section id="values" class="values">

  <div class="container" data-aos="fade-up">

    <div class="row justify-content-center">

      <div class="col" style="margin:35px">
        <div class="box1" style="" data-aos-delay="200">
          <div class="row">

            <div class="col-md-6">
              <div class="row">
                <div class="col-md-6" style="padding:10px 20px; margin:10px 0px 0px">
                <a href="mainpage.html" class="btn-back">Back to Home</a>
                </div>
              </div>
              <div class="row">
                <img src="assets/img/features.png" class="img-fluid" alt="">
              </div>
            </div>

            <div class="col-md-6" style="padding:10px 20px; margin:10px 0px 0px">
              <h2>Sign Up as Warehouse Manager</h2>
              <form action=".php">
                <div class="container">
                  <hr>
                  <input type="text" placeholder="Email" name="email" required><br><br>
                  <input type="password" placeholder="Password" name="psw" required><br><br>
                  <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                  <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                  </label>

                  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                  <div class="clearfix">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn">Sign Up</button>
                  </div>
                </div>
            </form>
            </div>
          </div>

        </div>
      </div>

    </div>

  </div>

</section>
</main>-->
<footer id="footer" class="footer">
<div class="container">
  <div class="copyright">
    &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>
</html>
