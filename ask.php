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

  <!-- show / hide quiz quesitons -->
  <script>
    // show question and button 
    function showQ(num) {
      if (num == 1) {
        const q1 = document.getElementById("q1");
        const txt1 = document.getElementById("txt1");
        const name1 = document.getElementById("name1");
        if (txt1.innerHTML == "Go") {
          name1.style.display = "inline-flex";
          q1.style.display = "inline-flex";
          txt1.innerHTML = "Hide";
        } else {
          q1.style.display = "none";
          txt1.innerHTML = "Go";
        }
      }
      if (num == 2) {
        const q2 = document.getElementById("q2");
        const txt2 = document.getElementById("txt2");
        const name2 = document.getElementById("name2");
        if (txt2.innerHTML == "Go") {
          name2.style.display = "inline-flex";
          q2.style.display = "inline-flex";
          txt2.innerHTML = "Hide";
        } else {
          q2.style.display = "none";
          txt2.innerHTML = "Go";
        }
      }
      if (num == 3) {
        const q3 = document.getElementById("q3");
        const txt3 = document.getElementById("txt3");
        const name3 = document.getElementById("name3");
        if (txt3.innerHTML == "Go") {
          name3.style.display = "inline-flex";
          q3.style.display = "inline-flex";
          txt3.innerHTML = "Hide";
        } else {
          q3.style.display = "none";
          txt3.innerHTML = "Go";
        }
      }
      if (num == 4) {
        const q4 = document.getElementById("q4");
        const txt4 = document.getElementById("txt4");
        const name4 = document.getElementById("name4");
        if (txt4.innerHTML == "Go") {
          name4.style.display = "inline-flex";
          q4.style.display = "inline-flex";
          txt4.innerHTML = "Hide";
        } else {
          q4.style.display = "none";
          txt4.innerHTML = "Go";
        }
      }
    }

    function next(num) {
      if (num == 1) {
        const name1 = document.getElementById("name1");
        const q1 = document.getElementById("q1");
        const txt1 = document.getElementById("txt1");
        if (txt1.innerHTML == "Hide") {
          name1.style.display = "none";
          q1.style.display = "none";
          txt1.innerHTML == "Go";
          showQ(2);
        }
      }
      if (num == 2) {
        const q2 = document.getElementById("q2");
        const name2 = document.getElementById("name2");
        const txt2 = document.getElementById("txt2");
        if (txt2.innerHTML == "Hide") {
          q2.style.display = "none";
          txt2.innerHTML == "Go";
          name2.style.display = "none";
          showQ(3);
        }
      }
      if (num == 3) {
        const q3 = document.getElementById("q3");
        const name3 = document.getElementById("name3");
        const txt3 = document.getElementById("txt3");
        if (txt3.innerHTML == "Hide") {
          q3.style.display = "none";
          txt3.innerHTML == "Go";
          name3.style.display = "none";
          showQ(4);
        }
      }
      if (num == 4) {
        const q4 = document.getElementById("q4");
        const txt4 = document.getElementById("txt4");
        const name4 = document.getElementById("name4");
        if (txt4.innerHTML == "Hide") {
          q4.style.display = "none";
          txt4.innerHTML == "Go";
          name4.style.display = "none";
          alert("Thank You For Using 'Ask For Help'")
          showQ(1)
        }
      }
    }
  </script>

</head>

<body>
  <!-- ======= Header ======= -->
  <!-- ======= Header ======= -->
   <?php include 'headers/header1.php'?>
  <!-- End Header -->
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

    <!-- ======= AskForHelp Section ======= -->
    <section id="AskForHelp" class="AskForHelp">
      <div class="container" data-aos="fade-up">
        <div class="section-title" data-aos="zoom-out">
          <h2>Ask For Help</h2>
          <p></p>
        </div>

        <!-- Q1 -->
        <div id="name1" class="row gy-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="AskForHelp-box">
              <i class="ri-discuss-line icon"></i>
              <h3>Questions 1</h3>
              <p>for more details</p>
              <a class="go-to" onclick="showQ(1)" style="cursor: pointer;"><span id="txt1">Go</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <!-- <iframe src="question.php" frameborder="0"></iframe> -->
          <div id="q1" class="row col-5" style="display: none;">
            <h4 class="fw-bold text-center mt-3"></h4>
            <form class=" bg-white px-4" action="">
              <p class="fw-bold">How satisfied are you with our product?</p>
              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleForm" id="radioExample1" />
                <label class="form-check-label" for="radioExample1">
                  Option 1
                </label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleForm" id="radioExample2" />
                <label class="form-check-label" for="radioExample2">
                  Option 2
                </label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleForm" id="radioExample3" />
                <label class="form-check-label" for="radioExample3">
                  Option 3
                </label>
              </div>
            </form>
            <div class="text-end">
              <button type="button" onclick="next(1)" class="btn btn-primary">Next</button>
            </div>
          </div>
        </div>

        <!-- Q2 -->
        <div id="name2" class="row gy-4" style="display: none;">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="AskForHelp-box">
              <i class="ri-discuss-line icon"></i>
              <h3>Questions2</h3>
              <p>more details</p>
              <a class="go-to" onclick="showQ(2)" style="cursor: pointer;"><span id="txt2">Go</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div id="q2" class="row col-5" style="display: none;">
            <h4 class="fw-bold text-center mt-3"></h4>
            <form class=" bg-white px-4" action="">
              <p class="fw-bold">How satisfied are you with our product?</p>
              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleForm" id="radioExample1" />
                <label class="form-check-label" for="radioExample1">
                  Option 1
                </label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleForm" id="radioExample2" />
                <label class="form-check-label" for="radioExample2">
                  Option 2
                </label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleForm" id="radioExample3" />
                <label class="form-check-label" for="radioExample3">
                  Option 3
                </label>
              </div>
            </form>
            <div class="text-end">
              <button type="button" onclick="next(2)" class="btn btn-primary">Next</button>
            </div>
          </div>
        </div>

        <!-- Q3 -->
        <div id="name3" class="row gy-4" style="display: none;">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="AskForHelp-box">
              <i class="ri-discuss-line icon"></i>
              <h3>Questions3</h3>
              <p>more details</p>
              <a class="go-to" onclick="showQ(3)" style="cursor: pointer;"><span id="txt3">Go</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div id="q3" class="row col-5" style="display: none;">
            <h4 class="fw-bold text-center mt-3"></h4>
            <form class=" bg-white px-4" action="">
              <p class="fw-bold">How satisfied are you with our product?</p>
              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleForm" id="radioExample1" />
                <label class="form-check-label" for="radioExample1">
                  Option 1
                </label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleForm" id="radioExample2" />
                <label class="form-check-label" for="radioExample2">
                  Option 2
                </label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleForm" id="radioExample3" />
                <label class="form-check-label" for="radioExample3">
                  Option 3
                </label>
              </div>
            </form>
            <div class="text-end">
              <button type="button" onclick="next(3)" class="btn btn-primary">Next</button>
            </div>
          </div>
        </div>

        <!-- Q4 -->
        <div id="name4" class="row gy-4" style="display: none;">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="AskForHelp-box">
              <i class="ri-discuss-line icon"></i>
              <h3>Questions4</h3>
              <p>more details</p>
              <a class="go-to" onclick="showQ(4)" style="cursor: pointer;"><span id="txt4">Go</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div id="q4" class="row col-5" style="display: none;">
            <h4 class="fw-bold text-center mt-3"></h4>
            <form class=" bg-white px-4" action="">
              <p class="fw-bold">How satisfied are you with our product?</p>
              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleForm" id="radioExample1" />
                <label class="form-check-label" for="radioExample1">
                  Option 1
                </label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleForm" id="radioExample2" />
                <label class="form-check-label" for="radioExample2">
                  Option 2
                </label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleForm" id="radioExample3" />
                <label class="form-check-label" for="radioExample3">
                  Option 3
                </label>
              </div>
            </form>
            <div class="text-end">
              <button type="button" onclick="next(4)" class="btn btn-primary">End</button>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End AskForHelp Section -->

    <!-- Start F.A.Q Section  -->
    <section id="faq" class="faq">
      <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <ul class="faq-list">
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">
              Questions 1? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
            </div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>answer a question1</p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">
              Questions 2? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
            </div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>answer a question 2</p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">
              Questions3 ? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
            </div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>answer a question 3</p>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!-- End F.A.Q Section -->
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