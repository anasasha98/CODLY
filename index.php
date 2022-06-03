<?php
session_start();
include './forms/connection.php';
// echo $username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

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
  <link href="assets/css/style.css" rel="stylesheet" />

  <!-- Contact Us CSS File -->
  <link rel="stylesheet" href="assets/css/contact-us.css" />
  <script src="https://kit.fontawesome.com/852d1a5b7b.js" crossorigin="anonymous"></script>

  <!-- Features CSS File -->
  <link href="assets/css/features.css" rel="stylesheet" />
</head>

<body>
  <!-- ======= Splash Screen ======= -->
  <!-- <div class="splash" data-aos="zoom-out-down"></div> -->
  <!-- End Header -->

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
            <a href="https://www.mysql.com" target="_blank">
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

    <!-- ======= Features Section ======= -->
    <section>
      <div class="categories">
        <div class="small-container">
          <div class="section-title" data-aos="zoom-out">
            <h2>Our Features</h2>
          </div>

          <div class="row" id="fet">
            <div class="col-4">
              <abbr title="Creative Ideas">
                <img src="assets/img/creative-ideas.png" />
              </abbr>
              <h4>Creative Ideas</h4>
            </div>
            <div class="col-4">
              <abbr title="Technology">
                <img src="assets/img/technology.png" />
              </abbr>
              <h4>Technology</h4>
            </div>
            <div class="col-4">
              <abbr title="Ready Target">
                <img src="assets/img/ready-target.png" style="padding-top: 10px" />
              </abbr>
              <h4>Ready Target</h4>
            </div>
            <div class="col-4">
              <abbr title="Useful Tricks">
                <img src="assets/img/useful-tricks.png" style="padding-top: 10px" />
              </abbr>
              <h4>Useful Tricks</h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Features Section -->

    <!-- Start Service -->
    <section id="ser" class="service-wrapper py-3">
      <div class="container-fluid pb-3">
        <div class="row">
          <div class="section-title" data-aos="zoom-out" style="margin-bottom: -30px;">
            <h2>Services</h2>
          </div>
        </div>
        <div class="text-center service-heading text-start light-300">
          <i class="bx bx-gift h3 mt-1" style="padding-right: 1%;"></i>
          <h2 class="h3 pb-4 typo-space-line" style="display: contents;">
            Make Success for future
          </h2>
        </div>
      </div>
      <p class="service-footer col-10 offset-2 col-lg-9 offset-lg-3 text-start pb-3 text-muted px-2"></p>
      </div>
    </section>

    <section class="container overflow-hidden py-5" style="margin-top: -50px ;">
      <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">
        <!-- Start Recent Work -->
        <?php
        $query = " SELECT * FROM `service-section` ";
        $result = mysqli_query($con, $query);
        if ($result) {
          while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        ?>
            <div class="col-xl-3 col-md-4 col-sm-6 project ui branding">
              <a href="detailed-service.php?sid=<?php echo $row['sec-id']; ?>&sname=<?php echo $row['sec-name']; ?>&sdesc=<?php echo $row['sec-desc']; ?> #ser " class=" service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="service card-img" src="./assets/img/<?php echo $row['sec-img'] ?>" alt="Card image" />
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                  <div class="service-work-content text-left text-light">
                    <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">
                      <?php
                      echo $row['sec-name'];
                      ?></span>
                    <!-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p> -->
                  </div>
                </div>

              </a>
            </div>
          <?php }
        } else {
          ?>
          <h5 class="h5 pb-4 typo-space-line text-center">
            <?php echo "❌ result is empty"; ?>
          </h5>
        <?php }
        ?>
        <!-- End Recent Work -->
      </div>
    </section>
    <!-- End Service -->

    <!-- ======= Counts Section ======= -->
    <br /><br />
    <section id="counts" class="counts section-bg" style="margin-top: -60px;">
      <div class="container">
        <div class="row">
          <div class="section-title" data-aos="zoom-out">
            <h2>Reviews</h2>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Counts Section -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="term.php">Term of service</a></li>
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
        Designed by <a href="development-team.php">IT Development Team</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Bothelp.io widget -->
  <script type="text/javascript">
    ! function() {
      var e = {
          "buttons": [{
            "type": "whatsapp",
            "token": "+962790875241"
          }, {
            "type": "messenger",
            "token": "https://www.facebook.com/profile.php?id=100067643372668"
          }, {
            "type": "instagram",
            "token": "_codly"
          }],
          "color": "#47B2E4",
          "position": "right",
          "bottomSpacing": "60",
          "callToActionMessage": "Need Help?",
          "displayOn": "everywhere",
          "lang": "en"
        },
        t = document.location.protocol + "//bothelp.io",
        o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.src = t + "/widget-folder/widget-page.js", o.onload = function() {
        new BhWidgetPage.init(e)
      };
      var n = document.getElementsByTagName("script")[0];
      n.parentNode.insertBefore(o, n)
    }();
  </script>
  <!-- /Bothelp.io widget -->


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