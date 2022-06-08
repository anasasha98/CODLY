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

  <title>Team codly</title>
  <meta content="Freelancer website" name="description" />

  <meta name="author" content="Codly">
  <meta content="codly" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/c.png" rel="icon" />

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



  <!-- Profile account script -->
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


  <style>
    .isDisabled {
      color: currentColor;
      cursor: default;
      opacity: 0.5;
      text-decoration: none;
      pointer-events: none;
    }
  </style>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />
</head>


<body>

  <!-- ======= Header ======= -->
  <?php include './headers/header2.php' ?>
  <!-- End Header -->


  <!-- ======== Profile information ======== -->
  <main id="main" style="padding-top: 70px;">
    <!-- ======= Team Section ======= -->
    <section id="team2" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Development Team</h2>
          <p>We are students expected to graduate from Al-Hussein Bin Talal University. We present to
            you our graduation project, Codly which was created for the purposes of completing a bachelor's
            degree in the College of Information Technology.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="15">
              <div class="pic"><img src="assets/img/team-name/1.png" class="img-fluid" alt=""></div>
              <div class=" member-info">
                <h4>Ali Ziadeh</h4>
                <span>Team Leader & Full-Stack Developer</span>
                <p>Leadership, Teamwork, Supportive, QA Tester, web prog.</p>
                <div class="social">
                  <a href="" target="_blank"><i class="ri-twitter-fill"></i></a>
                  <a href="" target="_blank"><i class="ri-facebook-fill"></i></a>
                  <a href="" class="isDisabled" target="_blank"><i class="ri-instagram-fill"></i></a>
                  <a href="" class="isDisabled" target="_blank"> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="15">
              <div class="pic"><img src="assets/img/team-name/3.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Safa'a Bataineh</h4>
                <span>Document Writer and QA</span>
                <p>Designer, Painter, Teamwork, organized, and QA Tester..</p>
                <div class="social">
                  <a href="" class="isDisabled" target="_blank"><i class="ri-twitter-fill"></i></a>
                  <a href="" class="isDisabled" target="_blank"><i class="ri-facebook-fill"></i></a>
                  <a href="" class="isDisabled" target="_blank"><i class="ri-instagram-fill"></i></a>
                  <a href="" class="isDisabled" target="_blank"> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="15">
              <div class="pic"><img src="assets/img/team-name/2.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Mohammad Daoud</h4>
                <span>Document Writer and QA</span>
                <p>Graphic Designer, Passionate Teamwork, Efficient Junior QA&nbsp;</p>
                <div class="social">
                  <a href="https://twitter.com/Mohammad1572001?t=E0fyYg5lMnw1zaOAq7zx6A&s=09" target="_blank"><i class="ri-twitter-fill"></i></a>
                  <a href="" class="isDisabled" target="_blank"><i class="ri-facebook-fill"></i></a>
                  <a href="https://www.instagram.com/m.1o5h/" target="_blank"><i class="ri-instagram-fill"></i></a>
                  <a href="" class="isDisabled" target="_blank"> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="15">
              <div class="pic"><img src="assets/img/team-name/5.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Anas Asha</h4>
                <span>Full-Stack Developer</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href="" class="isDisabled" target="_blank"><i class="ri-twitter-fill"></i></a>
                  <a href="" target="_blank"><i class="ri-facebook-fill"></i></a>
                  <a href="" target="_blank"><i class="ri-instagram-fill"></i></a>
                  <a href="" class="isDisabled" target="_blank"> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="5">
              <div class="pic"><img src="assets/img/team-name/4.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Heba Maloalain</h4>
                <span>Full-Stack Developer</span>
                <p>programmer,Passionate Teamwork,patient</p>
                <div class="social">
                  <a href="" class="isDisabled" target="_blank"><i class="ri-twitter-fill"></i></a>
                  <a href="" class="isDisabled" target="_blank"><i class="ri-facebook-fill"></i></a>
                  <a href="" class="isDisabled" target="_blank"><i class="ri-instagram-fill"></i></a>
                  <a href="" class="isDisabled" target="_blank"> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->
  </main> <!-- End profile information -->


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
              <a href="https://twitter.com/codly_" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/_codly/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UC1ompEGRFX5HaUL_YVqoB7A/" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
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
  <script src="assets/js/j/jquery-3.4.1.min.js"></script>
  <script src="assets/js/j/bootstrap.bundle.min.js"></script>
  <script src="assets/js/j/bootstrap.bundle.min.js"></script>
</body>

</html>