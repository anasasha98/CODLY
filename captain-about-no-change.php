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

  <title>about page - Codly</title>
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
  </script>

</head>


<body>
  
  <!-- ======= Header ======= -->
  <?php include './headers/header2.php'?>
  <!-- End Header -->

  <!-- ===== Captain Account Details ===== -->
  <?php
  if (isset($_GET['captainusername'])) {
    $captainusername = $_GET['captainusername'];
  }
  ?>


  <!-- ======== Profile information ======== -->
  <main id="main" style="padding-top: 60px;">
    <?php
    // pressed username
    $counter = 0;
    $query = "SELECT `bio`, `attach` FROM `captain` where `captainusername` = '$captainusername'";
    $result = mysqli_query($con, $query);
    if ($result) {
      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $counter += 1;
    ?>
        <div class="container-xl px-4 mt-4">
          <!-- Account page navigation-->
          <nav class="nav nav-borders">
            <a class="nav-link ms-0" href="captain-account-no-change.php?captainusername=<?php echo $captainusername; ?>">Profile</a>
            <a class="nav-link active" href="#">About</a>
            <a class="nav-link" href="captain-purchase-no-change.php?captainusername=<?php echo $captainusername; ?>">Purchased Service</a>
          </nav>
          <hr class="mt-0 mb-4">

          <div class="row">

            <div class="col-lg-8">
              <!-- bio info card-->
              <div class="card mb-4">
                <div class="card-header">Biography Information</div>
                <div class="card-body">
                  <form enctype="multipart/form-data">
                    <!-- Form Group (bio)-->
                    <div class="mb-3">
                      <label class="small mb-1" for="bio">Bio</label>
                      <textarea class="form-control" name="bio" id="info" disabled maxlength="1000" required oninput="countText()"><?php echo $row['bio']; ?></textarea>
                      <label class=" small mb-1" style="float: right;">
                        <span id="characters">0</span>
                        <span>/1000</span>
                        <br>
                      </label>
                    </div>
                    <!-- Form Group (file)-->
                    <div class="mb-3">
                      <?php
                      $get_attach = "SELECT `attach` FROM `captain` where `captainusername` = '$captainusername' ";
                      $attach_result = mysqli_query($con, $get_attach);
                      $profile_attach = mysqli_fetch_assoc($attach_result);
                      ?>
                      <label class="small mb-1" for="userfile">Attach File - (.pdf recommended) (680, 680px)</label>
                      <?php
                      if ($profile_attach['attach'] != "") {
                      ?>
                        <!-- <embed src="assets/files/captain_profile/<?php echo $profile_attach['attach']; ?>" width="680px" height="680px" /> -->
                        <iframe src="assets/files/captain_profile/<?php echo $profile_attach['attach']; ?>" width="680px" height="680px"></iframe>
                      <?php
                      } else {
                      ?>
                        <h6>❌ No File Attached</h6>
                      <?php
                      }
                      ?>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
  </main> <!-- End profile information -->
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

  textarea {
    width: 180%;
    height: 350px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
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