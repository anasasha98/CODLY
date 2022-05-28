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

  <title>profile account details - Codly</title>
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
  if (isset($_POST['captainusername'])) {
    $captainusername = $_POST['captainusername'];
    $_SESSION['capview'] = $captainusername;
  } else {
    if (isset($_SESSION['capview'])) {
      $captainusername = $_SESSION['capview'];
    }
  }
  ?>

  <main id="main" style="padding-top: 60px;">
    <?php
    // pressed username
    $counter = 0;
    $query = "SELECT `captainusername`, `firstname`, `lastname`, `email`, `phonenumber`, `dob`, `major`, `image` FROM `captain` where `captainusername` = '$captainusername' ";
    $result = mysqli_query($con, $query);
    if ($result) {
      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $counter += 1;
    ?>
        <!-- ======== Profile information ======== -->
        <!-- <main id="main" style="padding-top: 60px;"> -->
        <div class="container-xl px-4 mt-4">
          <!-- Account page navigation-->
          <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="#">Profile</a>
            <a class="nav-link" href="captain-about-page.php?captainusername=<?php echo $captainusername; ?>">About</a>
            <a class="nav-link" href="captain-security-page.php?captainusername=<?php echo $captainusername; ?>">Security</a>
            <a class="nav-link" href="add-services.php?captainusername=<?php echo $captainusername; ?>">My Service</a>
            <a class="nav-link" href="purchase-captain.php?captainusername=<?php echo $captainusername; ?>">Purchased Service</a>
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
            // First name
            $fname = $_POST['fname'];
            // Last name
            $lname = $_POST['lname'];
            // Phone number
            $phone = $_POST['phone'];
            // major
            $major = $_POST['major'];
            // Date of birth
            $dob = $_POST['dob'];

            // Update DB 
            $chnage = "UPDATE `captain` SET `firstname`='$fname',`lastname`='$lname',`phonenumber`='$phone',`dob`='$dob',`major`='$major' WHERE `captainusername` = '$captainusername'";
            $info = mysqli_query($con, $chnage);
            if ($info) {
              echo '<script type="text/javascript">',
              'showtrue("Info Updated Successfully.");',
              '</script>';
            } else {
              echo '<script type="text/javascript">',
              'showwrong("Data Not Updated.");',
              '</script>';
            }
          }
          ?>
          <div class="row">

            <!-- php code for image upload -->
            <?php
            // Initialize message variable
            $msg = "";
            // If upload images is clicked ...
            if (isset($_FILES["image"]) && !empty($_FILES["image"]["name"])) {
              if (is_uploaded_file($_FILES["image"]["tmp_name"]) && $_FILES["image"]["error"] === 0) {
                // everything okay, do process

                // Your file has been uploaded
                // the path to store the uploaded image
                $target = "assets/img/captain_profile/" . basename($_FILES['image']['name']);

                // Get all the submitted data from the form
                $image = $_FILES['image']['name'];

                // Stores the submitted data into the database table: captain
                $sql = "UPDATE `captain` SET `image`='$image' WHERE `captainusername` = '$captainusername'";
                // Execute query
                $res = mysqli_query($con, $sql);

                if ($res) {
                  echo '<script type="text/javascript">',
                  'showtrue("✔");',
                  '</script>';
                } else {
                  echo '<script type="text/javascript">',
                  'showwrong("✖");',
                  '</script>';
                }


                // check before change 
                $get_image = "SELECT `image` FROM `captain` where `captainusername` = '$captainusername' ";
                $image_result = mysqli_query($con, $get_image);
                $profile_image = mysqli_fetch_assoc($image_result);

                error_reporting(E_ERROR | E_PARSE);

                $filePath = "assets/img/captain_profile/{$row['image']}";
                // echo $filePath;
                if (file_exists($filePath)) {
                  if ($profile_image['image'] != $row['image']) {
                    unlink($filePath);
                    // echo "Image Successfully Updated.";
                    echo '<script type="text/javascript">',
                    'showtrue("Image Updated Successfully.");',
                    '</script>';
                  }
                } else {
                  // echo "New Image Added.";
                  echo '<script type="text/javascript">',
                  'showtrue("New Image Added.");',
                  '</script>';
                }

                // Now let's move the uploaded image into the folder: files
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                  $msg = "Image uploaded successfully";
                } else {
                  $msg = "There was a problem uploading image";
                }

                unset($_POST);
                $_POST = array();

                // call fucntion reload to save username value;
                echo '<script type="text/javascript">',
                'reload();',
                '</script>';

                // header("Refresh:0");
                // exit();
              }
            }
            ?>

            <div class="col-xl-4">


              <!-- Profile picture card -->
              <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                  <!-- Profile picture image-->
                  <?php
                  $get_image = "SELECT `image` FROM `captain` where `captainusername` = '$captainusername' ";
                  $image_result = mysqli_query($con, $get_image);
                  $profile_image = mysqli_fetch_assoc($image_result);
                  echo "<img class='img-account-profile rounded-circle mb-2' src='assets/img/captain_profile/" . $profile_image['image'] . "' alt='captain profile image'>";
                  ?>
                  <!-- Profile picture help block-->
                  <div class="small font-italic text-muted mb-4">JPG or PNG or any image format</div>

                  <!-- Profile picture upload button-->
                  <form method="POST" action="captain-account-details.php" enctype="multipart/form-data">
                    <input type="hidden" name="size" value="1000000">
                    <div style="height:0px; overflow:hidden;">
                      <input type="file" id="image" name="image" accept="image/*" onchange="javascript:this.form.submit();" />
                    </div>
                  </form>
                  <button class="btn btn-primary" type="button" onclick="image.click();">Upload new image</button>
                </div>
              </div>
            </div>

            <?php
            $query = "SELECT `captainusername`, `firstname`, `lastname`, `email`, `phonenumber`, `dob`, `major` FROM `captain` where `captainusername` = '$captainusername' ";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            ?>

            <div class="col-xl-8">
              <!-- Account details card-->
              <div class="card mb-4">
                <div class="card-header">Captain Account Details</div>
                <div class="card-body">
                  <form name="form1" method="POST" action="captain-account-details.php" enctype="multipart/form-data">
                    <!-- Form Group (username)-->
                    <div class="mb-3">
                      <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the
                        site)</label>
                      <input class="form-control" id="inputUsername" type="text" name="captainusername" disabled placeholder="Enter your username" value="<?php echo $row['captainusername']; ?> " maxlength="25">
                    </div>
                    <!-- Form Row-->
                    <div class="row gx-3 mb-3">
                      <!-- Form Group (first name)-->
                      <div class="col-md-6">
                        <label class="small mb-1" for="inputFirstName">First name</label>
                        <input class="form-control" id="inputFirstName" type="text" name="fname" placeholder="Enter your first name" value="<?php echo $row['firstname']; ?>" maxlength="25">
                      </div>
                      <!-- Form Group (last name)-->
                      <div class="col-md-6">
                        <label class="small mb-1" for="inputLastName">Last name</label>
                        <input class="form-control" id="inputLastName" type="text" name="lname" placeholder="Enter your last name" value="<?php echo $row['lastname']; ?>" maxlength="25">
                      </div>
                    </div>
                    <!-- Form Row -->
                    <div class="row gx-3 mb-3">
                      <!-- Form Group (major title)-->
                      <div class="mb-3">
                        <label class="small mb-1" for="inputOrgName">Major</label>
                        <input class="form-control" id="inputOrgName" type="text" name="major" placeholder="Enter your major field" value="<?php echo $row['major']; ?>" maxlength="25">
                      </div>
                    </div>
                    <!-- Form Group (email address)-->
                    <div class="mb-3">
                      <label class="small mb-1" for="inputEmailAddress">Email address</label>
                      <input class="form-control" id="inputEmailAddress" type="email" name="email" disabled placeholder="Enter your email address" value="<?php echo $row['email']; ?>" maxlength="50">
                    </div>
                    <!-- Form Row-->
                    <div class="row gx-3 mb-3">
                      <!-- Form Group (phone number)-->
                      <div class="col-md-6">
                        <label class="small mb-1" for="inputPhone">Phone number</label>
                        <input class="form-control" id="inputPhone" type="tel" name="phone" placeholder="Enter your phone number" value="<?php echo '+' . $row['phonenumber']; ?>" maxlength="12">
                      </div>
                      <!-- Form Group (birthday)-->
                      <div class="col-md-6">
                        <label class="small mb-1" for="inputBirthday">Date of Birth</label>
                        <input class="form-control" id="inputBirthday" type="text" name="dob" placeholder="Enter your birthday" value="<?php echo $row['dob']; ?>">
                      </div>
                    </div>
                    <!-- Save changes & Discard button-->
                    <button class="btn btn-secondary" type="reset" id="discard" onClick="window.location.reload();">Discard</button>
                    <button class="btn btn-primary" type="submit" id="save" name="save">Save changes</button>
                  </form>
                  <script type="text/javascript" src="assets/js/btn_check.js"></script>
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
<?php }
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

  @media only screen and (min-width: 1200px) {
    .col-xl-4 {
      margin-top: -285px;
    }
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