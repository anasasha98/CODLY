<?php
include './forms/connection.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>codly</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

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
  <link href="assets/css/style.css" rel="stylesheet" />

  <!-- Contact Us CSS File -->
  <link rel="stylesheet" href="assets/css/contact-us.css" />
  <script src="https://kit.fontawesome.com/852d1a5b7b.js" crossorigin="anonymous"></script>

  <!-- Features CSS File -->
  <link href="assets/css/features.css" rel="stylesheet" />
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Build your business with top freelancers</h1>
          <h2>
            Post a job for free and connect with independent talent today.
          </h2>
          <div class="d-flex justify-content-center justify-content-lg-start">

            <?php
            if (isset($_SESSION['username'])) {
              $username = $_SESSION['username'];
              $type = $_SESSION['type'];
            ?>
              <a class="btn-get-started scrollto" style="cursor: pointer;" href="#ser"><span>Get Started</span></a>
            <?php
            } else {
            ?>
              <a href="sign-up.php" class="btn-get-started scrollto"><span>Sign up</span></a>
            <?php
            }

            ?>

            <a href="https://youtu.be/mFFID0vPOcE" class="glightbox btn-watch-video">
              <i class="bi bi-play-circle"></i>
              <span>Watch Video</span>
            </a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets\img\hero-img.png" class="img-fluid animated" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->
  
  <main id="main">
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">
        <div class="row" data-aos="zoom-in">
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.oracle.com" target="_blank">
              <img src="assets/img/clients/client-1.png" class="img-fluid" alt="" />
            </a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.microsoft.com" target="_blank">
              <img src="assets/img/clients/client-2.png" class="img-fluid" alt="" />
            </a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.orange.com" target="_blank">
              <img src="assets/img/clients/client-3.png" class="img-fluid" alt="" />
            </a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.ahu.edu.jo" target="_blank">
              <img src="assets/img/clients/client-4.png" class="img-fluid" alt="" />
            </a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.paypal.com" target="_blank">
              <img src="assets/img/clients/client-5.png" class="img-fluid" alt="" />
            </a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.github.com" target="_blank">
              <img src="assets/img/clients/client-6.png" class="img-fluid" alt="" />
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Cliens Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13783.832878660562!2d35.675448810559104!3d30.26677161135485!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xecb9574de4155292!2sAl-Hussein%20Bin%20Talal%20University!5e0!3m2!1sen!2sjo!4v1650107281519!5m2!1sen!2sjo" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


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
</body>

</html>