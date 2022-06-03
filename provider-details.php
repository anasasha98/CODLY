<?php
include './forms/connection.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <!-- auto refresh page after 10 min -->
  <meta http-equiv="refresh" content="600">


  <title>provider details - codly</title>
  <meta content="Freelancer website" name="description" />
  <meta content="codly" name="keywords" />
  <meta name="author" content="Codly">

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
  <header id="header" class="fixed-top header-inner-pages">
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

    <?php

    $service_id = $_GET['service_id'];
    $counter = 0;
    $query = " SELECT * FROM `service-provider` WHERE `service_id` = '$service_id'   ";
    $result = mysqli_query($con, $query);
    if ($result) {
      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $counter += 1;
    ?>

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
          <div class="container">

            <ol>
              <?php
              // page 1
              $sno = $row['sno'];
              $sername = mysqli_fetch_array(mysqli_query($con, "SELECT `sno`, `name` FROM `detailed-service` WHERE `sno` = '$sno'"), MYSQLI_ASSOC);
              $page1 = mysqli_fetch_array(mysqli_query($con, "SELECT `sec-id`, `sec-name`, `sec-desc` FROM `service-section` WHERE `sec-id` = (SELECT `sec-id` FROM `detailed-service` WHERE `sno` = $sno) "), MYSQLI_ASSOC);
              ?>
              <li><a href="index.php#ser">Home</a></li>
              <li><a href="detailed-service.php?sid=<?php echo $page1['sec-id']; ?>&sname=<?php echo $page1['sec-name']; ?>&sdesc=<?php echo $page1['sec-desc']; ?> #ser"><?php echo $page1['sec-name']; ?></a></li>
              <li><a href="service.php?sno=<?php echo $sername['sno']; ?>&sname=<?php echo $sername['name']; ?>#pack"><?php echo $sername['name']; ?></a></li>
              <li></li>
            </ol>
            <h2><?php echo $row['job_title']; ?></h2>

          </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->

        <section id="portfolio-details" class="portfolio-details">
          <div class="container">
            <div class="row gy-4">

              <div class="col-lg-8">
                <div class="portfolio-details-slider swiper">
                  <div class="swiper-wrapper align-items-center">

                    <div class="swiper-slide">
                      <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image1']) . '" />'; ?>
                    </div>

                    <div class="swiper-slide">
                      <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image2']) . '" />'; ?>
                    </div>
                    <div class="swiper-slide">
                      <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image3']) . '" />'; ?>
                    </div>

                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="portfolio-info">
                  <h3>service information</h3>
                  <ul>

                    <li>
                      <strong>Category</strong>:
                      <?php
                      echo $sername['name'];
                      ?>
                    </li>

                    <li>
                      <strong>Provider</strong>:
                      <?php
                      echo $row['captainusername'];
                      ?>

                    </li>
                    <li><strong>Service Rating</strong>:
                      <div class="packages-review" style="display: inline-block; margin-bottom: -20px;">
                        <p>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </p>
                      </div>
                    </li>
                    <li><strong>Service Viewers</strong>:
                      <?php
                      echo 10;
                      ?>
                    </li>
                    <li><strong>Publish date</strong>: 01 March, 2020</li>
                  </ul>
                </div>
                <div class="portfolio-description">
                  <h2>This is Discribtion for the service</h2>
                  <p>
                    <?php
                    echo $row['job_desc']; ?>
                  </p>
                </div>
              </div>

            </div>

          </div>
        </section><!-- End Portfolio Details Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Pricing</h2>
            </div>
            <p class="text-center" style="margin-top: -15px;">Magnam dolores commodi suscipit. Necessitatibus eius
              consequatur ex aliquid fuga eum quidem. Sit sint
              consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
              sit
              in iste officiis commodi quidem hic quas.</p>

            <div class="row">

              <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <h3>Standard Plan</h3>
                  <h4><sup>$</sup><?php echo $row['price1']; ?><span></span></h4>
                  <ul>
                    <?php
                    $txt = $row['price1_desc'];
                    if ($txt) {
                      $lines = explode("-", $txt);
                      foreach ($lines as $i => $value) {
                    ?>
                        <li>
                          <i class="bx bx-check"></i>
                          <?php echo $lines[$i]; ?>
                        </li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                  <a href="payment.php#payment" class="buy-btn">Get Started</a>
                </div>
              </div>

              <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                  <h3>Premium Plan</h3>
                  <h4><sup>$</sup><?php echo $row['price2']; ?><span></span></h4>
                  <ul>
                    <?php
                    $txt = $row['price2_desc'];
                    if ($txt) {
                      $lines = explode("-", $txt);
                      foreach ($lines as $i => $value) {
                    ?>
                        <li>
                          <i class="bx bx-check"></i>
                          <?php echo $lines[$i]; ?>
                        </li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                  <a href="payment.php#payment" class="buy-btn">Get Started</a>
                </div>
              </div>

              <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="box">
                  <h3>Professional Plan</h3>
                  <h4><sup>$</sup><?php echo $row['price3']; ?><span></span></h4>
                  <ul>
                    <?php
                    $txt = $row['price3_desc'];
                    if ($txt) {
                      $lines = explode("-", $txt);
                      foreach ($lines as $i => $value) {
                    ?>
                        <li>
                          <i class="bx bx-check"></i>
                          <?php echo $lines[$i]; ?>
                        </li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                  <a href="payment.php#payment" class="buy-btn">Get Started</a>
                </div>
              </div>

            </div>
          <?php
        }
      }
      if ($counter == 0) {
          ?>
          <h5 class="h5 pb-4 typo-space-line text-center" style="margin-top: 10em;">
            <?php echo "❌ result is empty"; ?>
          </h5>
        <?php }
        ?>
          </div>
        </section><!-- End Pricing Section -->

  </main><!-- End #main -->

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
            <div class="social-links mt-3" style="padding-left: 3%;">
              <h4>Our Social Networks</h4>
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
              <!--  -->
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">

      <div class="copyright">
        &copy; Copyright <strong><span>Codly</span></strong>. All Rights Reserved
      </div>

      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="development-team.php#team2">IT Development Team</a>
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