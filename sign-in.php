<?php
session_start();
include 'forms/connection.php';

if (isset($_POST['submitcaptain'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "SELECT * FROM `captain` WHERE `captainusername` ='$username' AND password ='$password'";
  $results = mysqli_query($con, $query);
  if (mysqli_num_rows($results) == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['type'] = 'captain';
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
  } else {

    echo '<script language="javascript">';
    echo 'alert("Wrong username/password combination")';
    echo '</script>';
  }
}

if (isset($_POST['submitcustomer'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "SELECT * FROM `customer` WHERE `customerusername` = '$username' AND password = '$password'";
  $results = mysqli_query($con, $query);
  if (mysqli_num_rows($results) == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['type'] = 'customer';
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
  } else {

    echo '<script language="javascript">';
    echo 'alert("Wrong username/password combination")';
    echo '</script>';
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign in</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/c.png" rel="icon">
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />

  <style>
    body {
      color: #6e6b6b;
    }

    .btn-info {
      color: #4e4e4e;
      background-color: #98dcf3;
      border-color: #98dcf3;
    }

    .btn-info:hover {
      color: #4e4e4e;
      background-color: #85ebff;
      border-color: #85ebff;
    }

    .btn-primary {
      color: #fff;
      background-color: #23aaf3;
      border-color: #23aaf3;
    }

    .btn-primary:hover {
      color: #fff;
      background-color: #3195cb;
      border-color: #3195cb;
    }

    .card {
      border: 1px solid rgb(203 210 213);
    }
  </style>


</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body" style="padding-top: 40px;">

                  <div class="d-flex justify-content-center ">
                    <a href="index.php">
                      <center>
                        <img src="assets/img/logo.png" alt="Codly logo" width="50px" style="margin-top: -30px; margin-bottom: -8px; ">
                      </center>
                    </a>
                  </div>

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Sign in to Your Account</h5>
                    <p class="text-center small">Enter your username & password to Sign in</p>
                  </div>

                  <form class="row g-3 needs-validation" method="post" enctype="multipart/form-data">

                    <div class="col-12">
                      <label for="username" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="username" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="link forget-pass text-left" style="margin: 0px 0px 5px 0px;"><a href="forgot-password.php"><small>Forgot password?</small></a></div>
                    <br>
                    <button type="submit" class="btn btn-info" class="btn btn-secondary btn-sm" name="submitcustomer" id="submitcustomer">Sign in as a Customer</button>
                    <button type="submit" class="btn btn-primary" class="btn btn-primary btn-sm" name="submitcaptain" id="submitcaptain">Sign in as a Captain</button>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="sign-up.php">Create an account</a></p>
                    </div>
                  </form>


                </div>
              </div>



            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>