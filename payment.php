<?php
include './forms/connection.php';
include 'insert-to-cart.php'; 
// include 'addcart.php';


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

  <!-- Payment Resource -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/payment.css">
  <style>
    
    .cvv{
      display:none;
background-color:#f4f4f4;
border-color:#f4f4f4;


    }
 .log:hover + .cvv {
  display:block ;

 }

 
    .exp-wrapper {
  position: relative;
  border: 1px solid #aaa;
  display: flex;
  width: 300px;
  justify-content: space-around;
  height: 40px;
  line-height: 36px;
  font-size: 24px;
}

.exp-wrapper:after {
  content: '/';
  position: absolute;
  left: 50%;
  margin-left: -4px;
  color: #aaa;
}

input.exp {
  margin-top:5px;
  float: left;
  font-family: monospace;
  /* border: 0; */
  width: 100px;
  /* outline: none; */
  appearance: none;
  font-size: 14px;
}
    
</style>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php">codly</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="getstarted scrollto" href="index.php">Home</a></li>
          <!-- <li><a class="nav-link scrollto" href="about.php#about">About</a></li>

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
            <a href="index.php #ser"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
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
            <a class="nav-link scrollto active" href="#contact">Contact</a>
          </li>
          <li>
            <a class="getstarted scrollto" href="sign-in.php">Sign in</a>
          </li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  

  <main id="main">

    

    <!-- ======= Payment Section ======= -->
    <section id="payment" style="margin-top: 50px;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style=" display:inline;">Payment Form</h2>
        </div>

        <div class="row row2">
          <div class="col-100">
            <div class="container2">
              <form action="insert-to-cart.php" method="POST" >

                <div class="row">
                  <div class="col-50">
                    <h3 >Billing Address</h3>
                    <label style="  margin-top:30px; " for="fname"><i class="fa fa-user"></i> Full Name</label>
                    <input type="text" id="fname" name="firstname" class="form-control" placeholder="John M. Doe"  required>
                    <label style="  margin-top:30px; " for="email"><i class="fa fa-envelope"></i> Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="john@example.com" style="height:50px;" required>
            
                    <label for="adr"style="  margin-top:30px; "><i class="fa fa-address-card-o"></i> Address</label>
                    <input  class="form-control" type="text" id="adr" name="address" placeholder="542 W. 15th Street" required>
                    <label for="city" style="  margin-top:30px; "><i class="fa fa-institution"></i> City</label>
                    <input class="form-control" type="text" id="city" name="city" placeholder="New York" required>

                    <!-- <div class="row">
                      <div class="col-50">
                        <label for="state">State</label>
                        <input type="text" id="state" name="state" placeholder="NY">
                      </div> -->
                     <div class="row">
                      <div class="col-50">
                      <label for="state">State</label>
                      <select  class="form-control" id="state" name="country-state" required>
    <option value=""></option>
    <option value="AF">Afghanistan</option>
    <option value="AL">Algeria</option>
    <option value="AR">Argentina</option>
    <option value="BR">Bihar</option>
    <option value="CH">Chandigarh</option>
    <option value="CT">Canada</option>
    <option value="CI">China</option>
    <option value="DD">Daman and Diu</option>
    <option value="DL">Delhi</option>
    <option value="GA">Germany</option>
    <option value="GJ">Gujarat</option>
    <option value="HR">Haryana</option>
    <option value="HP">Himachal Pradesh</option>
    <option value="I">Iraq</option>
    <option value="JH">Jordan</option>
    <option value="KA">Kazakhstan</option>
    <option value="KL">Kerala</option>
    <option value="LA">Ladakh</option>
    <option value="LD">Lakshadweep</option>
    <option value="MP">Madhya Pradesh</option>
    <option value="MH">Maharashtra</option>
    <option value="MN">Manipur</option>
    <option value="ML">Meghalaya</option>
    <option value="MZ">Mizoram</option>
    <option value="NL">Nagaland</option>
    <option value="OR">Odisha</option>
    <option value="PY">Puducherry</option>
    <option value="PB">Punjab</option>
    <option value="RJ">Rajasthan</option>
    <option value="SK">Sikkim</option>
    <option value="TN">Tamil Nadu</option>
    <option value="TG">Telangana</option>
    <option value="TR">Tripura</option>
    <option value="UP">Uttar Pradesh</option>
    <option value="UT">Uttarakhand</option>
    <option value="WB">West Bengal</option>
</select>    </div> 
<div class="form-group" style="margin-top:30px;">
                                <label for="CustomerUsername" style="margin-top:30px;" >Customer User name:</label>
                                <select class="form-control"  id="CustomerUsername" name="customer-username"  required>
                                <option value=""></option>
                              <option value="hebamalo">hebamalo</option>
                                  <option value="mohammed_ahmed">mohammed_ahmed</option>
                                 
                                </select>
               </div>
               <div class="form-group">
                                <label style="  margin-top:30px; " for="CaptainUsername:">Captain User Name:</label>
                                <select  class="form-control" id="CaptainUsername" name="captain-username" required >
                                <option value=""></option>
                                  <option value="ali0Ziadeh" >ali0Ziadeh</option>
                                  <option value="jamesbond">jamesbond</option>
                                
                                </select>
               </div>
                      <!-- <div class="col-50">
                        <label for="zip">Zip</label>
                        <input type="text" id="zip" name="zip" placeholder="10001">
                      </div> -->
                    
                  

                  <div class="col-50">
                    <h3 style=" display:inline; margin-top:30px;">Payment</h3>
                  
                        <div  style="display:inline; float:right;" class="icon-container">
                      <i class="fa fa-cc-visa" style="color:navy;"></i>
                      <i class="fa fa-cc-amex" style="color:blue;"></i>
                      <i class="fa fa-cc-mastercard" style="color:red;"></i>
                      <i class="fa fa-cc-discover" style="color:orange;"></i>
                    </div>
                 
                    <label for="cname" style="margin-top:30px;">Name on Card</label>
                    <input  class="form-control" type="text" id="cname" name="cardname" placeholder="Name on Card" required>
                    
                 
                   
          
                    <label for="ccnum" style="margin-top:30px;">Credit card number</label>
                    <input  class="form-control"style="margin-top:30px;" type="number" id="ccnum" name="cardnumber" placeholder="Credit card number" style=" display:inline;" required>
                   
                        <label for="log" style="margin-top:30px;"> <i class="bi bi-credit-card-fill"></i> CVV</label>
                        <input  class="form-control log" id="log"  type="number" max="999"  pattern="([0-9]|[0-9]|[0-9])" name="cvv" required/>
              
                        <input  class=" cvv"style="margin-top:30px;" type="text"   placeholder="Card Verification Value is a 3 digit number only " Readonly><i></i>
                        <!-- <div class="geeks" style="display:none;">
                              
                        The CVV Number (Card Verification Value) is a 3 digit number on VISA®, MasterCard® and Discover® 
                        </div> -->
                        <!-- <input class="form-control" type="text" id="date" name="date"  " value="<?php 
                        // echo date("Y-m-d"); 
                        ?>" placeholder="Today date" readonly> -->
                      
                      <label for="" style=" margin-top:30px;"> Expiry date (MM /YY)  </label>
<div class="exp-wrapper" >

  <input  class="exp"  maxlength="2" pattern="[0-9]*"  placeholder="MM" type="text"  />
  <input  class="exp"  maxlength="2" pattern="[0-9]*"  placeholder="YY" type="text"  />
</div>


                       

<!-- info for purchase  -->

               <div class="form-group">
                                <label style="  margin-top:30px; "for="ser">Service Name:</label>
                                <select  class="form-control" id="ser" name="service-name" required>
                                  <option value="" > </option>
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
                                <label style="  margin-top:30px; " for="price">Price:</label>
                                <select class="form-control"   id="price" name="price" required>
                                <option value=""></option>
                                <!-- <option > Price:</option> -->
                                  <option value="1">1$</option>
                                  <option value="2$">2$</option>
                                  <option value="3$">3$</option>
                                
                                </select>
               </div>
              
               


<!-- end info -->


                  </div>
                  </div>
              
                <label>
                <input type="checkbox" name="sameadr" required> I understand that by checking out this box I approve for all <a href="term.php">term of service</a>
                </label>
                <label>
                  <input type="checkbox" checked="checked" name="sameadr" style="margin-top:20px;" > Shipping address same as billing Address
                </label>
                <input type="submit" value="Pay" name="pay-now" class="btn" onClick='alert("Are you sure you want pay now...?") '>
              </form>
           
         
         
          </div>
        </div>
      </div>

      </div>
    </section>
    <!-- End Payment Section -->

  </main>
  <!-- End #main -->
  <script>
//  var f = document.getElementById("field");

// // When the user move on the cvv field, show the message box
// f.onmouseover= function() {
//   document.getElementById("geeks").style.display = "block";
// }
// const log = document.getElementById('log');

// document.addEventListener('keydown', logKey);

// function logKey(e) {
//   document.getElementByClass("cvv").style.visibility: "visible";
//   // log.textContent += ` ${e.code}`;
// }



</script>

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
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
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