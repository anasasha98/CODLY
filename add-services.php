<!-- database connection -->
<?php
include './forms/connection.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>add service - Codly</title>
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
  <link rel="stylesheet" href="admin/css/styles.css" />
  <script src="https://kit.fontawesome.com/852d1a5b7b.js" crossorigin="anonymous"></script>

  <!-- Features CSS File -->
  <link href="assets/css/features.css" rel="stylesheet" />

  <!-- Profile account script -->
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }


    // shows alert success on screen
    function showtrue(x) {
      var box = document.getElementById("img_success");
      box.innerHTML += x;
      box.style.display = "block";
    }

    // remove alert success from screen
    function hidetrue() {
      document.getElementById("img_success").style.display = "none";
    }
    setTimeout(() => {
      hidetrue();
    }, 4000);

    // shows alert wrong on screen
    function showwrong(x) {
      var box2 = document.getElementById("wrong");
      box2.innerHTML += x;
      box2.style.display = "block";
    }

    // remove alert wrong from screen
    function hidewrong() {
      document.getElementById("wrong").style.display = "none";
    }
    setTimeout(() => {
      hidewrong();
    }, 4000);
  </script>

</head>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">codly</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <!-- <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php#about">About</a></li>

          <li class="dropdown">
            <a href="ask.php#AskForHelp"><span>Ask us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="ask.php#AskForHelp">Ask For Help</a></li>
              <li><a href="ask.php#faq">Frequently Asked Questions</a></li>
            </ul>
          </li>

          <li><a class="nav-link scrollto" href="team.php#team">Success stories</a></li>
          <li><a class="nav-link  active scrollto" href="index.php#ser">Services</a></li>

          <li><a class="nav-link scrollto" href="contact.php#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="sign-in.php">Sign in</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav> -->
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->


  <!-- ===== Captain Account Details ===== -->
  <?php
  $captainusername = 'ali0Ziadeh';
  // get captain username from previos page
  if (isset($_GET['captainusername'])) {
    $captainusername = $_GET['captainusername'];
    $_SESSION['capview'] = $captainusername;
  } else {
  if (isset($_SESSION['capview'])) {
    $captainusername = $_SESSION['capview'];
  }
  }
  ?>


  <!-- ======== Profile information ======== -->
  <main id="main" style="padding-top: 60px;">
    <div class="container-xl px-4 mt-4">
      <!-- Account page navigation-->
      <nav class="nav nav-borders">
        <a class="nav-link  ms-0" href="captain-account-details.php?captainusername=<?php echo $captainusername; ?>">Profile</a>
        <a class="nav-link" href="captain-about-page.php?captainusername=<?php echo $captainusername; ?>">About</a>
        <a class="nav-link" href="captain-security-page.php?captainusername=<?php echo $captainusername; ?>">Security</a>
        <a class="nav-link active" href="#">My serivce</a>
        <a class="nav-link" href="purchase.php?captainusername=<?php echo $captainusername; ?>">Purchased Service</a>
      </nav>
      <hr class="mt-0 mb-4">

      <!-- True Alert -->
      <div class="alert success" id="img_success" style="display: none;">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Success!</strong>
      </div>

      <!-- Wrong Alert -->
      <div class="alert" id="wrong" style="display: none;">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Error!</strong>
      </div>

      <!--Start Form-->
      <div class="container-fluid mt-n10">
        <div class="card mb-4">
          <div class="card-header">Create New Service</div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="post-title">Service Title:</label>
                <input class="form-control" id="post-title" type="text" placeholder="Service title ..." />
              </div>

              <div class="form-group">
                <label for="select-category">Select Service:</label>
                <select class="form-control" id="select-category">
                  <option>Design</option>
                  <option>Design Logo</option>
                  <option>Date</option>
                  <option>Graphic</option>
                  <option>WordPress</option>
                  <option>Development</option>
                  <option>Business</option>
                  <option>Game Art</option>

                </select>
              </div>
              <div class="form-group">
                <label for="post-title">Choose photo:</label>
                <input class="form-control" id="post-title" type="file" />
              </div>

              <div class="form-group">
                <label for="post-content">Service Details:</label>
                <textarea class="form-control" placeholder="Type here..." id="post-content" rows="9"></textarea>
              </div>
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Tag1</span>
                <input type="text" class="form-control" value='#'>
              </div>
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Tag2</span>
                <input type="text" class="form-control" value='#'>
              </div>
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Tag3</span>
                <input type="text" class="form-control" value='#'>
              </div>
          </div>
          <button class="btn btn-primary mr-2 my-1" type="button">Post Service Now</button>
          </form>
        </div>
      </div>
      <!--End Form-->

    </div>
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
              <strong>Phone:</strong> 060001<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#ser">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php#contact">Contact</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
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
            <h4>Our Social Networks</h4>
            <!-- <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p> -->
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
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
        Designed by <a href="#">IT Development Team</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <style type="text/css">
    body {
      margin-top: 20px;
      background-color: #f2f6fc;
      color: #69707a;
    }

    .img-account-profile {
      height: 10rem;
    }

    .rounded-circle {
      border-radius: 50% !important;
    }

    .card {
      box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
    }

    .card .card-header {
      font-weight: 500;
    }

    .card-header:first-child {
      border-radius: 0.35rem 0.35rem 0 0;
    }

    .card-header {
      padding: 1rem 1.35rem;
      margin-bottom: 0;
      background-color: rgba(33, 40, 50, 0.03);
      border-bottom: 1px solid rgba(33, 40, 50, 0.125);
    }

    .form-control,
    .dataTable-input {
      display: block;
      width: 100%;
      padding: 0.875rem 1.125rem;
      font-size: 0.875rem;
      font-weight: 400;
      line-height: 1;
      color: #69707a;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #c5ccd6;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      border-radius: 0.35rem;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .nav-borders .nav-link.active {
      color: #0061f2;
      border-bottom-color: #0061f2;
    }

    .nav-borders .nav-link {
      color: #69707a;
      border-bottom-width: 0.125rem;
      border-bottom-style: solid;
      border-bottom-color: transparent;
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
      padding-left: 0;
      padding-right: 0;
      margin-left: 1rem;
      margin-right: 1rem;
    }

    .btn-danger-soft {
      color: #000;
      background-color: #f1e0e3;
      border-color: #f1e0e3;
    }

    /* Alter mesage Box */
    .alert {
      padding: 20px;
      background-color: #f44336;
      color: white;
      opacity: 1;
      transition: opacity 0.6s;
      margin-bottom: 15px;
    }

    .alert.success {
      background-color: #04AA6D;
    }

    .closebtn {
      margin-left: 15px;
      color: white;
      font-weight: bold;
      float: right;
      font-size: 22px;
      line-height: 20px;
      cursor: pointer;
      transition: 0.3s;
    }

    .closebtn:hover {
      color: black;
    }

    /* The message box is shown when the user clicks on the password field */
    #message {
      display: none;
      background: #F8F8F9;
      color: #000;
      position: relative;
      padding: 20px;
      margin-top: 10px;
    }

    #message p {
      padding: 10px 25px;
      font-size: 16px;
    }

    /* Add a green text color and a checkmark when the requirements are right */
    .valid {
      color: green;
    }

    .valid:before {
      position: relative;
      left: -25px;
      content: "✔";
    }

    /* Add a red text color and an "x" when the requirements are wrong */
    .invalid {
      color: red;
    }

    .invalid:before {
      position: relative;
      left: -25px;
      content: "✖";
    }

    /* Toggle Password */
    label+i {
      float: right;
      margin-right: 10px;
      cursor: pointer;
    }

    a,
    a:hover {
      text-decoration: none;
    }

    .credits>a {
      color: #47b2e4;
    }
  </style>

  <script type="text/javascript">

  </script>


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