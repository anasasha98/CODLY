<?php
if (isset($_POST['signupCaptain'])) {
  header('location: ./user-details/captain-details.php');
}
if (isset($_POST['signupCustomer'])) {
  header('location: ./user-details/customer-details.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign Up</title>
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
</head>

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
    background-color: #85ebff;
    border-color: #85ebff;
  }

  .btn-primary {
    color: #fff;
    background-color: #23aaf3;
    border-color: #23aaf3;
  }

  .btn-primary:hover {
    background-color: #3195cb;
    border-color: #3195cb;
  }

  .card {
    border: 1px solid rgb(203 210 213);
  }
</style>

<body>

  <main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body" style="padding-top: 40px;">

                  <div class="d-flex justify-content-center">
                    <a href="index.php">
                      <center>
                        <img src="assets/img/logo.png" alt="Codly logo" width="50px" style="margin-top: -30px; margin-bottom: -8px; ">
                      </center>
                    </a>
                  </div>
                  <!-- End Logo -->

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Sign up to new Account</h5>
                    <p class="text-center small"></p>
                  </div>

                  <form class="row g-3 needs-validation" method="post">

                    <button type="submit" class="btn btn-info" class="btn btn-secondary btn-sm" name="signupCustomer" id="signupCustomer">Sign Up as a Customer</button>
                    <button type="submit" class="btn btn-primary" class="btn btn-primary btn-sm" name="signupCaptain" id="signupCaptain">Sign Up as a Captain</button>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="sign-in.php">Sign in</a></p>
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