
<?php
include './forms/connection.php';
include 'insert-to-cart.php'; 
// include 'service.php';
// $username = "root";
// $password = "";
// $server = "localhost";
// $db = "codly";


// $con = mysqli_connect($server, $username, $password, $db);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <script data-search-pseudo-elements defer src="assets/js/j/all.min.js"></script>
  <script src="assets/js/j/feather.min.js"></script>

  <title>codly</title>
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
  <link href="assets/css/st.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />

  <!-- Contact Us CSS File -->
  <link rel="stylesheet" href="assets/css/contact-us.css" />
  <script src="https://kit.fontawesome.com/852d1a5b7b.js" crossorigin="anonymous"></script>

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">codly</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="getstarted scrollto" href="index.php">Home</a></li>
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <main id="main">

    <main>
      <div class="page-header pb-10 ">
        <div class="container-fluid">

          <div class="section-title" data-aos="zoom-out">
            <h2>Add Cart Form</h2>
          </div>
        </div>
        <!-- START FORM -->
        
        <form action="insert-to-cart.php" method="POST" >

      </div>
      <div class="container mt-n10  ">
        <div class="card mb-4">
          <div class="card-header">Cart Area:</div>
          <div class="card-body pb-2">
           
             
                
               
               
               <div class="form-group">
                                <label for="Captain User name:" >Customer User name:</label>
                                <select class="form-control"  id="CustomerUsername" name="customer-username" required>
                                <option value=""> Choose from the list...</option>
                              <option value="hebamalo">hebamalo</option>
                                  <option value="mohammed_ahmed">mohammed_ahmed</option>
                                 
                                </select>
               </div>
               <div class="form-group">
                                <label for="Captain User name:">Captain User Name:</label>
                                <select class="form-control" id="CaptainUsername" name="captain-username"  required>
                                <option value=""> Choose from the list...</option>
                                  <option value="ali0Ziadeh" >ali0Ziadeh</option>
                                  <option value="jamesbond">jamesbond</option>
                                
                                </select>
               </div>
               <div class="form-group">
                                <label for="Captain User name:">Service Name:</label>
                                <select class="form-control" id="ser" name="service-name" required>
                                  <option value="" > Choose from the list...</option>
                                  <option value="UX/UI Designers">UX/UI Designers</option>
                                  <option value="Graphic Designers">Graphic Designers</option>
                                  <option value="Illustration">Illustration</option>
                                  <option value="Photoshop">Photoshop</option>
                                  <option value="Interior Design">Interior Design</option>
                                  <option value="Video Editing">Video Editing</option>
                                  <option value="Art Designers">Art Designers</option>
                                  <option value="Motion Design">Motion Design</option>
                                  <option value="Marketing">Marketing</option>
                                  <option value="Game Animation">Game Animation</option>
                                </select>
               </div>
               <div class="form-group">
                                <label for="user-name">Price:</label>
                                <select class="form-control" id="price" name="price" required>
                                <option value="" > Choose from the list...</option>
                                  <option value="1">1$</option>
                                  <option value="2">2$</option>
                                  <option value="3">3$</option>
                                
                                </select>
               </div>
              
               




              <input type="submit" id="addc"   onClick='alert("Are you sure you want add to cart...?") '  class="btn btn-primary mr-2 my-1" type="button" name="send-to-cart" value="Add To My Cart">

            </form>
          </div>
        </div>
      </div>
      <!--End Form-->

<!-- include './forms/connection.php';

if (isset($_POST['add'])) {
  // $ser-id = $_POST['sno'];


  // $pricecart = $_POST['price'];
  // $sername = $_POST['job_title'];
  // $capname = $_POST['ename']; 

  $stmt = $con->prepare("INSERT INTO `cart` (`cart_id`, `customer-username`, `service-id`, `service-name`, `service-price`, `captain-username`) VALUES (1, 'hebamalo', '1007', 'editing video', '300', 'jamesbond') ");
  // $stmt -> bind_param("sis" , $sername ,$pricecart ,  $capname );
  $stmt->execute();

  header('Location: cart.php');

  $stmt->close();
  $con->close();
} -->










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
          Designed by <a href="">IT Development Team</a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <!-- <style>
      #addc  {
        disabled :"false";
        
      }
      </style> -->
    <script>
  // var myinput1 = document.getElementById("#CustomerUsername");
  // var myinput2 = document.getElementById("#CaptainUsername");
  // var btn = document.getElementById("addc");
  // var myinput3 = document.getElementById("#ser");
  // var myinput3 = document.getElementById("#price");

  // When the user clicks on the password field, show the message box
// myinput1.onclick=function(){
//   var btn = document.getElementById("#addc");
//     btn.style.disabled =true;
  
   
//   }
  
  
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
?>




    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/j/jquery-3.4.1.min.js"></script>
    <script src="assets/js/j/bootstrap.bundle.min.js"></script>
    <script src="assets/js/j/bootstrap.bundle.min.js"></script>
</body>

</html>