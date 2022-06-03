<?php
include './forms/connection.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>security page - Codly</title>
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


  <!-- ======= Main ======= -->
  <main id="main" style="padding-top: 60px;">
    <div class="container-xl px-4 mt-4">

      <!-- ===== Customer Security Page ===== -->
      <?php
      if (isset($_SESSION['username'])) {
        $customerusername = $_SESSION['username'];
      }
      ?>

      <!-- Account page navigation-->
      <nav class="nav nav-borders">
        <a class="nav-link  ms-0" href="customer-account-details.php?customerusername=<?php echo $customerusername; ?>">Profile</a>
        <a class="nav-link active" href="#">Security</a>
        <a class="nav-link" href="customer-purchase.php?customerusername=<?php echo $customerusername; ?>">Purchased Service</a>
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

      <!-- ===== send any changed information to db ===== -->
      <?php
      if (isset($_POST['save'])) {
        // Current password
        $psw0 = $_POST['psw0'];
        // New password
        $psw = $_POST['psw'];
        // Confirm password
        $psw2 = $_POST['psw2'];

        $query = "SELECT `password` FROM `customer` where `customerusername` = '$customerusername' ";
        $result = mysqli_query($con, $query);
        if ($result) {
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        }

        if ($psw0 == $row['password']) {
          // Update DB 
          $chnage = "UPDATE `customer` SET `password`='$psw' WHERE `customerusername` = '$customerusername'";
          $info = mysqli_query($con, $chnage);
          if ($info) {
            echo '<script type="text/javascript">',
            'showtrue("Password Updated Successfully.");',
            '</script>';
          } else {
            echo '<script type="text/javascript">',
            'showwrong("Password Not Updated.");',
            '</script>';
          }
        } else {
          echo '<script type="text/javascript">',
          'showwrong("Invalid Password.");',
          '</script>';
        }
      }
      ?>

      <?php
      // pressed username
      $counter = 0;
      $query = "SELECT `password` FROM `customer` where `customerusername` = '$customerusername' ";
      $result = mysqli_query($con, $query);
      if ($result) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
          $counter = 1;
      ?>
          <div class="row">
            <div class="col-lg-8">
              <!-- Change password card-->
              <div class="card mb-4">
                <div class="card-header">Change Password</div>
                <div class="card-body">
                  <form method="POST" action="customer-security-page.php" enctype="multipart/form-data">
                    <!-- Form Group (current password)-->
                    <div class="mb-3">
                      <label class="small mb-1" for="psw0">Current Password</label>
                      <i class="bi bi-eye-slash" id="togglePassword0"></i>
                      <input class="form-control" id="psw0" type="password" name="psw0" placeholder="Enter current password" title="current password" required>
                    </div>
                    <!-- Form Group (new password)-->
                    <div class="mb-3">
                      <label class="small mb-1" for="psw">New Password</label>
                      <i class="bi bi-eye-slash" id="togglePassword"></i>
                      <input class="form-control" type="password" id="psw" name="psw" placeholder="Enter new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" maxlength="25" minlength="8" required>
                    </div>
                    <!-- Form Group (confirm password)-->
                    <div class="mb-3">
                      <label class="small mb-1" for="psw2">Confirm Password</label>
                      <i class="bi bi-eye-slash" id="togglePassword2"></i>
                      <input class="form-control" type="password" id="psw2" name="psw2" placeholder="Confirm new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must Match the new password" maxlength="25" minlength="8" required>
                    </div>

                    <div class="mb-3" style="margin-left: 25px;">
                      <p id="msg" style="display: none;"></p>
                    </div>

                    <!-- Save changes & Discard button-->
                    <button class="btn btn-secondary" type="reset" id="discard" onClick="window.location.reload();">Discard</button>
                    <button class="btn btn-primary" type="submit" id="save" name="save">Save changes</button>
                  </form>
                  <script type="text/javascript" src="assets/js/btn_check.js"></script>
                </div>

                <!-- ===== New Password Condition ===== -->
                <div id="message">
                  <h5>Password must contain the following:</h5>
                  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                  <p id="number" class="invalid">A <b>number</b></p>
                  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                  <p id="length2" class="valid">Maximum <b>25 characters</b></p>
                </div>

              </div>
            </div>
          </div>
    </div>
    <!-- End password information -->
  <?php
        }
      }
      if ($counter == 0) {
  ?>
  <h5 class="h5 pb-4 typo-space-line text-center" title="Profile Not Found" style="cursor: default; padding-top: 220px;">
    <?php echo "❌ result is empty"; ?>
  </h5>
<?php
      }
?>

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


  <!-- ==== New Password Conditions ==== -->
  <script>
    var myInput = document.getElementById("psw");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
      document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
      document.getElementById("message").style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {
      // Validate lowercase letters
      var lowerCaseLetters = /[a-z]/g;
      if (myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
      } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
      }

      // Validate capital letters
      var upperCaseLetters = /[A-Z]/g;
      if (myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
      } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
      }

      // Validate numbers
      var numbers = /[0-9]/g;
      if (myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
      } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
      }

      // Validate length
      if (myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
      } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
      }
    }
  </script>

  <!-- ==== Confirmation Password ==== -->
  <script>
    var myInput2 = document.getElementById("psw2");
    var msg = document.getElementById("msg");

    // When the user clicks on the password field, show the message box
    myInput2.onfocus = function() {
      msg.style.display = "none";
      msg.removeAttribute('class');
      msg.style.display = "block";
      msg.innerHTML = "password did not match";
      msg.classList.add("invalid");
    }

    // When the user starts to type something inside the password field
    myInput2.onkeyup = function() {
      // Validate lowercase letters
      var pw1 = document.getElementById("psw").value;
      var pw2 = document.getElementById("psw2").value;
      if (pw1 != pw2 && pw1 != "" && pw2 != "") {
        msg.style.display = "block";
        msg.innerHTML = "password did not match";
        msg.removeAttribute('class');
        msg.classList.add("invalid");
      } else if (pw1 == pw2 && pw1 != "" && pw2 != "") {
        msg.style.display = "block";
        msg.innerHTML = "Password matched successfully";
        msg.removeAttribute('class');
        msg.classList.add("valid");
      }
    }
  </script>

  <script>
    const togglePassword0 = document.querySelector("#togglePassword0");
    const togglePassword = document.querySelector("#togglePassword");
    const togglePassword2 = document.querySelector("#togglePassword2");

    // const password = document.querySelector("#password");
    var ps0 = document.getElementById("psw0");
    var ps = document.getElementById("psw");
    var ps2 = document.getElementById("psw2");

    togglePassword0.addEventListener("click", function() {
      // toggle the type attribute
      if (ps0.type == 'password') {
        ps0.type = 'text';
      } else {
        ps0.type = 'password';
      }

      // toggle the icon
      this.classList.toggle("bi-eye");
    });

    togglePassword.addEventListener("click", function() {
      // toggle the type attribute
      if (ps.type == 'password') {
        ps.type = 'text';
      } else {
        ps.type = 'password';
      }

      // toggle the icon
      this.classList.toggle("bi-eye");
    });

    togglePassword2.addEventListener("click", function() {
      // toggle the type attribute
      if (ps2.type == 'password') {
        ps2.type = 'text';
      } else {
        ps2.type = 'password';
      }

      // toggle the icon
      this.classList.toggle("bi-eye");
    });
  </script>

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