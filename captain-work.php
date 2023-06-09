<!-- database connection -->
<?php
include './forms/connection.php';
require_once "controllerUserData.php";

// session_start();


// if (isset($_POST['update-status'])) {

//   }?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <script data-search-pseudo-elements defer src="assets/js/j/all.min.js"></script>
  <script src="assets/js/j/feather.min.js"></script>

  <title>purchase service - codly</title>
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
  <style>
    /* #purchasebutton { */
    /* background-color:#22dba8;
border-color:#22dba8; */
    /* } */
  </style>
  <link href="assets/css/st.css" rel="stylesheet" />
  <link rel='stylesheet' type='text/css' href='modal.css'>
</head>


<body>

  <!-- ======= Header ======= -->
  <?php include './headers/header2.php' ?>
  <!-- End Header -->


  <!-- ===== Captain Account Details ===== -->
  <?php
  if (isset($_SESSION['username'])) {
    $captainusername = $_SESSION['username'];
  }

?>
 
 



  <!-- ======== Profile information ======== -->
  <main id="main" style="padding-top: 60px;">
  <?php
    if (isset($_SESSION['type']) && $_SESSION['type'] == 'captain') {
      if (isset($_SESSION['username'])) {
        $captainusername = $_SESSION['username'];}}
    ?>
 
    <div class="container-xl px-4 mt-4">
      <!-- Account page navigation-->
      <nav class="nav nav-borders">
        <a class="nav-link  ms-0" href="captain-account-details.php">Profile</a>
        <a class="nav-link" href="captain-about-page.php">About</a>
        <a class="nav-link" href="captain-security-page.php">Security</a>
        <a class="nav-link" href="captain-purchase.php">Purchased Service</a>
        <a class="nav-link" href="captain-published.php">My serivce</a>
        <a class="nav-link active" href="#">My Work</a>
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

      <!--Start Table-->
      <div class="card mb-4">
        <div class="card-body">
          <div class="datatable table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th align="center">Purchase ID</th>
                  <th align="center">Customer Username </th>
                  <!-- <th>Service ID </th> -->
                  <th align="center">Service Name</th>
                  <th align="center">Captin Username</th>
                  <th align="center">Price</th>
                  <th align="center">Date</th>

                  <th align="center">Complete </th>
                  <th align="center">Status</th>

                </tr>






              </thead>
              <tbody>
                <?php
              
                $query = " SELECT * FROM  `purchase_list` where `captain-username` = '$captainusername ' ";
                $result = mysqli_query($con, $query);
                if ($result) {
                  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $_SESSION['purchase_id'] =  $row['Purchase ID']; ;
                    // $id-list = $row['Purchase ID'];
                    ?>

                    <tr>
                      <td align="center"><?php echo $row['Purchase ID']; ?></td>
                      <td align="center"><?php echo $row['Customer Username']; ?></td>
                      <!-- <td align="center">
                        <?php
                        // echo $row['Service ID']; 
                        ?>
                    </td> -->

                      <td>
                        <?php echo $row['Service Name']; ?>
                      </td>
                      <td>
                        <?php echo $row['captain-username']; ?>
                      </td>
                      <td><?php echo $row['Price'] . '$'; ?></td>
                      <td><?php echo $row['Date']; ?></td>

                      <td align="center">
                        <!-- <form action="controllerUserData.php" method="POST"> -->
                        <div class="form-group">
                          <!-- <button type="submit" name="update-status" onClick='confirm("Are you sure you have completed the service...?") ' class="btn btn-success ">
                              click
                            </button> -->
                            <!-- <button  class="myBtn">Complete</button> -->

                          <!-- <input  class="btn btn-success form-control" type="submit" name="pstatus" value="click">  -->
                        </div>
                        <!-- </form> -->

                        <a href="completeservice.php?id=<?php echo $row['Purchase ID']; ?>"  > 
   <input class="upfile" type="submit" name="yes" value="Complete" style=" height:50px;"></a> 




                      </td>
                      <td>
                        <?php echo $row['Status']; ?>
                      </td>



                    </tr>
                <?php   }
                } ?>
                <!-- <tr> 
                                  <td align="center">2</td>
                                  <td>
                                    Design web
                                  </td>
                                  <td>
                                  Smith Blake
                                  </td>
                                  <td>Free $</td>
                                  <td>17 Nov 2020</td>
                                  <td>
                                      <div class="badge badge-success">Pending
                                      </div>
                                  </td>
                                  <td>
                                      <button class="btn btn-success btn-icon"><i data-feather="mail"></i></button>
                                  </td>
                                  <td>
                                      <button class="btn btn-red btn-icon"><i data-feather="delete"></i></button>
                                  </td>
                                
                              </tr>     -->
              </tbody>

            </table>
          </div>
        </div>
      </div>
      <!--End Table-->

    </div>

  </main> <!-- End profile information -->

  <!-- The Modal -->
  <!-- <div id="myModal" class="modal"> -->

<!-- Modal content -->
<!-- <div class="modal-content"> -->
  <!-- <span class="close">&times; </span> -->
  <!-- If yes, please include the service file and then send it to the user -->
  <!-- <p style ="color:black; margin-bottom:30px;">"✔" Are you sure you have completed the service...?</p> -->
  <!-- <form action="completeservice.php" method="GET"> -->
  <!-- <div> -->
 <!-- <input type="text" value="<?php
  // echo $row['Purchase ID'];  ?>" hidden name="yesinfo"> -->
  <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
<!-- <a href="completeservice.php"  > -->
  <!-- <input class="upfile" type="submit" name="yes" value="   Yes   " style=" height:50px;"></a> -->
  <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->

  <!-- <a href="captain-work.php"> -->
  <!-- <input class="upfile" type="submit"  value="   No   " style=" height:50px;"></a> -->
  <!-- </form> -->
<!-- </div></form> -->
<!-- </div> -->

   

  <!-- </div> -->
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

    .table {
      color: #687281;
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
  <script src="assets/js/j/jquery-3.4.1.min.js"></script>
  <script src="assets/js/j/bootstrap.bundle.min.js"></script>
  <script src="assets/js/j/bootstrap.bundle.min.js"></script>
  <script src="modal.js"></script>
</body>

</html>