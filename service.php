<?php
include './forms/connection.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>services - codly</title>
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
  <!-- ======= Header ======= -->
  <?php include './headers/header1.php' ?>
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

    <!--packages start-->
    <section id="pack" class="packages">
      <?php
      $sname = $_GET['sname'];
      ?>
      <div class="container">
        <div class="gallary-header text-center">
          <div class="section-title aos-init aos-animate text-center" data-aos="zoom-out">
            <h2><?php echo $sname ?></h2>
          </div>

          <div class="text-center service-heading text-start light-300" style="margin-top: -3%; color: #293C5D;">
            <i class="bi bi-wrench" style="padding-right: 1%; font-size: 140%;"></i>
            <h2 class="h3 pb-4 typo-space-line" style="display: contents;">
              Service Providers
            </h2>
          </div>
        </div>

        <!--/.gallery-header-->
        <div class="packages-content">
          <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">
            <?php
            $sno = $_GET['sno'];
            $num1 = null;
            $num2 = 20;
            $counter = 0;
            $query = " SELECT * FROM `service-provider` WHERE `sno` = '$sno' ";
            $result = mysqli_query($con, $query);
            if ($result) {
              while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $counter += 1;
            ?>
                <!--  -->
                <div class="col-6 col-md-4 col-sm-6 project ui branding">
                  <div class="single-package-item">
                    <!-- image -->
                    <div class="single-package-item-txt">
                      <h3>
                        <?php
                        $captainusername = $row['captainusername'];
                        $name = " SELECT `firstname`, `lastname` FROM `captain` WHERE `captainusername` = '$captainusername' ";
                        $getname = mysqli_query($con, $name);
                        if ($getname) {
                          $capname = mysqli_fetch_array($getname, MYSQLI_ASSOC);
                          echo $capname['firstname'] . ' ' . $capname['lastname'];
                          echo '<br><small style="font-size: 13px">';
                          if ($captainusername != $username) {
                        ?>
                            <a href="captain-account-no-change.php?captainusername=<?php echo $captainusername; ?>"><?php echo $captainusername; ?></a>
                        <?php
                            echo '</small>';
                          } else {
                            echo '<a href="captain-account-details.php">' . $captainusername . '</a>';
                            echo '</small>';
                          }
                        }
                        ?>
                      </h3>
                      <h4><?php echo $row['job_title'] ?></h4>
                      <div class="packages-para">
                        <p>
                          <span>
                            <?php
                            if ($row['tag1']) {
                            ?>
                              <i class="fa fa-angle-right"></i>
                              <a href="#" style="color: #47b2e4;">
                                <?php echo $row['tag1']; ?>
                              </a>
                            <?php
                            }
                            ?>
                          </span>
                          <?php
                          if ($row['tag2']) {
                          ?>
                            <i class="fa fa-angle-right"></i>
                            <a href="#" style="color: #47b2e4;">
                              <?php echo $row['tag2']; ?>
                            </a>
                          <?php
                          }
                          ?>
                        </p>
                        <p>
                          <span>
                            <?php
                            if ($row['tag3']) {
                            ?>
                              <i class="fa fa-angle-right"></i>
                              <a href="#" style="color: #47b2e4;">
                                <?php echo $row['tag3']; ?>
                              </a>
                            <?php
                            }
                            ?>
                          </span>
                          <?php
                          if ($row['tag4']) {
                          ?>
                            <i class="fa fa-angle-right"></i>
                            <a href="#" style="color: #47b2e4;">
                              <?php echo $row['tag4']; ?>
                            </a>
                          <?php
                          }
                          ?>
                        </p>
                      </div>
                      <div class="packages-review">
                        <p>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <span style="margin-left: 50px;"><?php echo $row['views']; ?> reviews</span>
                        </p>
                      </div>
                      <!--/.Service Provider-review-->

                      <center>
                        <a href="provider-details.php?service_id=<?php echo $row['service_id']; ?>">
                          <input type="submit" class="btn btn-secondary my-3" name="preview" value="Preview">
                        </a>
                      </center>
                    </div>

                    <!--/.about-btn-->
                    <!-- <form action="cart.php">
                      <center>
                        <input type="submit" class="btn btn-secondary my-3" name="add" value="Add to Cart">
                      </center>
                    </form> -->

                  </div>
                  <!--/.single-package-item-txt-->

                </div>
                <!--  -->

              <?php
              }
            }
            if ($counter == 0) {
              ?>
              <h5 class="h5 pb-4 typo-space-line text-center" style="margin-top: 80px;">
                <?php echo "❌ result is empty"; ?>
              </h5>
            <?php }
            ?>

            <!--/.single-package-item-->
            <!--/.single-package-item-txt-->
          </div>
        </div>
        <!--/.col-->
      </div>
    </section>
    <!--/.packages-->
    <!--packages end-->

  </main>


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
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
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