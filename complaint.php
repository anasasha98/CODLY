<?php
include './forms/connection.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <script data-search-pseudo-elements defer src="assets/js/j/all.min.js"></script>
  <script src="assets/js/j/feather.min.js"></script>

  <title>codly</title>
  <meta content="Freelancer website" name="description" />

  <meta name="author" content="Codly">
  <meta content="codly" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/c.png" rel="icon" />
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" /> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />


  <!-- Template Main CSS File -->
  <link href="assets/css/st.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />

  <!-- Contact Us CSS File -->
  <link rel="stylesheet" href="assets/css/contact-us.css" />
  <script src="https://kit.fontawesome.com/852d1a5b7b.js" crossorigin="anonymous"></script>

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php">codly</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php#about">About</a></li>
          <li class="dropdown">
            <a href="ask.php#AskForHelp"><span>Ask us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="ask.php#AskForHelp">Ask For Help</a></li>
              <li><a href="ask.php#faq">Frequently Asked Questions</a></li>
            </ul>
          </li>

          <li>
            <a class="nav-link scrollto" href="team.php#team">Success stories</a>
          </li>
          <li class="dropdown">
            <a href="index.php#ser"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Web development</a></li>
              <li class="dropdown">
                <a href="#"><span>Designing</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Design UI/UX</a></li>
                  <li><a href="#"> Design Logo</a></li>
                  <li><a href="#"> Game Art </a></li>
                </ul>
              </li>
              <li><a href="#">Graphic</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Data </a></li>
              <li><a href="#">WordPress</a></li>
            </ul>
          </li>
          <li>
            <a class="nav-link scrollto" href="contact.php#contact">Contact</a>
          </li>
          <?php
          if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
          ?>
            <li class="dropdown">
              <a class=" scrollto" href="<?php echo $_SESSION['type'] ?>-account-details.php">
                <i class="bi bi-person-circle"></i>&nbsp;<?php echo $username; ?>
                <i class="bi bi-chevron-down"></i>
              </a>
              <!-- <a href="index.php#ser"><span>Services</span> <i class="bi bi-chevron-down"></i></a> -->
              <ul>
                <li><a href="captain-account-details.php">Profile</a></li>
                <li><a href="captain-about-page">About</a></li>
                <li><a href="captain-security-page.php">Security</a></li>
                <li><a href="captain-add-service.php">Publish serivce</a></li>
                <li><a href="captain-purchase.php">Purchased Service</a></li>
                <li><a href="captain-work.php">My Work</a></li>
                <li><a href="logout.php">Logout <i class="bi bi-box-arrow-right"></i></a></li>
              </ul>
            </li>

          <?php
          } else {
          ?>
            <li>
              <a class="getstarted scrollto" href="sign-in.php">Sign in</a>
            </li>
          <?php
          }
          ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <main id="main">

    <main>
      <div class="page-header pb-10 ">
        <div class="container-fluid">

          <div class="section-title" data-aos="zoom-out">
            <h2>Complaints Form</h2>
          </div>
        </div>
        <!-- START FORM -->

      </div>
      <div class="container-fluid mt-n10">
        <div class="card mb-4">
          <div class="card-header">Complaints Area:</div>
          <div class="card-body">
            <form action="test.php" method="post">
              <div class="form-group">
                <label for="user-name"><b>Customer User name:</b></label>
                <input class="form-control" required id="customer-user-name" name="customer-user-name" type="text" placeholder="User name ..." value="" />
              </div>
              <div class="form-group">
                <label for="user-name"><b>Captain User name:</b></label>
                <input class="form-control" id="captain-user-name" required name="captain-user-name" type="text" placeholder="User name ..." value="" />
              </div>
              <div class="form-group">
                <label for="post-content"><b>Complaints Details:</b></label>
                <textarea class="form-control" placeholder="Type your complaint here..." id="content" name="content" rows="9" maxlength="1000" required></textarea>
              </div>


              <div class="form-group">
                <label for="post-tags"><b>Image (optional)</b></label>
                <input type="file" class="form-control" id="img-comp" name="img-comp">
              </div>


              <input type="submit" class="btn btn-primary mr-2 my-1" type="button" name="send-complaint" value="Send My Complaint">

            </form>
          </div>
        </div>
      </div>
      <!--End Form-->










    </main>

    <!-- End #main -->


    <!-- ======= Footer ======= -->
    <footer id="footer">


      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>Codly</h3>
              <p>
                Al-Hussein Bin Talal University students <br>
                Ma'an <br>
                Jordan <br><br>
                <strong>Phone:</strong> <a href="tel:+962 32179000">+962 32179000</a><br>
                <strong>Email:</strong> <a href="mailto:codlywb@gmail.com">codlywb@gmail.com</a><br>

              </p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="about.php#about">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#ser">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="contact.php#contact">Contact</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Designing</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">graphic</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Business</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Data</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <img src="assets/img/logo.png" alt="codly logo image" height="180px">
              <!-- <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p> -->
              <div class="social-links mt-3" style="padding-left: 10px;">
                <h4>Our Social Networks</h4>
                <a href="https://twitter.com/codly_" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/_codly/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UC1ompEGRFX5HaUL_YVqoB7A/" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="container footer-bottom clearfix">
        <div class="credits">

          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
          Designed by <a href="">IT Development Team</a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>


    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/j/jquery-3.4.1.min.js"></script>
    <script src="assets/js/j/bootstrap.bundle.min.js"></script>
    <script src="assets/js/j/bootstrap.bundle.min.js"></script>
</body>

</html>