<?php
session_start();
include './forms/connection.php';

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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- for payment card -->
    <title>Credit Card Validation Demo</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="payment/css/styles.css">
    <!-- <link rel="stylesheet" type="text/css" href="payment/css/demo.css"> -->
    <style>
      body{
    font: normal 18px sans-serif;
    color: #333;
    background-color: #eee;
}

.container-fluid{
    padding:0;
    margin:0;
}

      </style>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 
</head>

<body>
  <!-- ======= Header ======= -->
  <?php include './headers/header2.php'; ?>
  <!-- End Header -->



  <main id="main">
    <section id="payment" style="margin-top: 50px;">
      <div class="container" data-aos="fade-up" style="margin-bottom:100px">

        <div class="section-title">
          <!-- <h2 style=" display:inline; ">Payment Form</h2> -->
        </div>

        <!-- ======= Payment Section ======= -->

        <div class="creditCardForm">
    <div class="heading">
        <h1>Confirm Purchase</h1>
    </div>
    <div class="payment">
        <form method="POST">
            <div class="form-group owner">
                <label for="owner">Owner</label>
                <input type="text" class="form-control" id="owner" required>
            </div>
            <div class="form-group CVV">
                <label for="cvv">CVV</label>
                <input type="text" class="form-control" id="cvv" required>
            </div>
            <div class="form-group" id="card-number-field">
                <label for="cardNumber">Card Number</label>
                <input type="text" class="form-control" id="cardNumber" required>
            </div>
            <div class="form-group" id="expiration-date">
                <label>Expiration Date</label>
                <select required>
                    <option value="01">January</option>
                    <option value="02">February </option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option> 
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select required>
                    <option value="16"> 2022</option>
                    <option value="17"> 2023</option>
                    <option value="18"> 2024</option>
                    <option value="19"> 2025</option>
                    <option value="20"> 2026</option>
                    <option value="21"> 2027</option>
                </select>
            </div>
            <div class="form-group" id="credit_cards">
                <img src="payment/images/visa.jpg" id="visa">
                <img src="payment/images/mastercard.jpg" id="mastercard">
                <img src="payment/images/amex.jpg" id="amex">
            </div>
            <!-- <div class="form-group" id="pay-now">
                <button type="submit" class="btn btn-default" id="confirm-purchase">Confirm</button>
            </div> -->
        </form>
        <?php
              $cart_id = $_GET['cart_id'];


              $query = " SELECT * FROM `cart` WHERE `cart_id` = '$cart_id'   ";
              $result = mysqli_query($con, $query);
              if ($result) {
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

                  $txt = $row['service-id'];


              ?>
                  <a href="insert-to-purchase.php?cart_id=<?php echo $row['cart_id']; ?>"><input type="submit" class=" btn btn-success mx-2 btn-hover" value="Pay Now" onClick='alert("Are you sure you want pay now...?") '></a>

              <?php }
              } ?>
    </div>
</div>


<p class="examples-note">Here are some example credit card numbers and CVV codes :</p>

<div class="examples">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Card Number</th>
                    <th>Security Code</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Visa</td>
                    <td>4716108999716531</td>
                    <td>257</td>
                </tr>
                <tr>
                    <td>Master Card</td>
                    <td>5281037048916168</td>
                    <td>043</td>
                </tr>
                <tr>
                    <td>American Express</td>
                    <td>342498818630298</td>
                    <td>3156</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>


        <!-- <div class="row" style="width: 550px; margin: 20px 27% -150px 25%;">
          <div class="col-75">
            <div class="container cont">
              <form action="" method="POST">
                <div class="row">
                  <div class="col-50"> -->
                    <!-- <h3>Payment</h3> -->

                    <!-- <label for="fname">Accepted Cards</label>
                    <div class="icon-container">
                      <i class="fa fa-cc-visa" style="color:navy;" title="visa"></i>
                      <i class="fa fa-cc-amex" style="color:blue;" title="american express"></i>
                      <i class="fa fa-cc-mastercard" style="color:red;" title="master card"></i>
                      <i class="fa fa-cc-discover" style="color:orange;" title="discover"></i>
                    </div>

                    <label for="cname">Name on Card</label>
                    <input type="text" class="form-input" id="cname" name="cardname" placeholder="John More Doe" required>

                    <label for="ccnum">Credit card number</label>
                    <input type="number" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>

                    <label for="expmonth" style="margin: 20px 0 5px 0;">Expiry date (MM / YY)</label>
                    <input type="month" id="expmonth" name="expmonth" required> -->

                    <!-- <div class="row"> -->
                    <!-- <div class="col-50"> -->
                    <!-- <label for="log">CVV</label>
                    <input type="number" id="log" class="log" max="999" pattern="([0-9]|[0-9]|[0-9])" name="cvv" placeholder="352" required> -->
                    <!-- <  class=" cvv"style="margin-top:30px;" type="text"   placeholder="Card Verification Value is a 3 digit number only " Readonly><i></i> -->
                    <!-- </div> -->
                    <!-- </div> -->
                  <!-- </div>
                </div>
                <label>
                  <input type="checkbox" name="sameadr" required> I understand that by checking out this box <br>&nbsp;&nbsp;&nbsp;&nbsp;I approve for all <a href="term.php">term of service</a>
                </label> -->

              <!-- </form> -->

             
            <!-- </div> -->
          <!-- </div> -->

        <!-- </div> -->
        <!-- End Payment Section -->

  </main>
  <!-- End #main -->
  <script>


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
<script>
  $(function() {

var owner = $('#owner');
var cardNumber = $('#cardNumber');
var cardNumberField = $('#card-number-field');
var CVV = $("#cvv");
var mastercard = $("#mastercard");
var confirmButton = $('#confirm-purchase');
var visa = $("#visa");
var amex = $("#amex");

// Use the payform library to format and validate
// the payment fields.

cardNumber.payform('formatCardNumber');
CVV.payform('formatCardCVC');


cardNumber.keyup(function() {

    amex.removeClass('transparent');
    visa.removeClass('transparent');
    mastercard.removeClass('transparent');

    if ($.payform.validateCardNumber(cardNumber.val()) == false) {
        cardNumberField.addClass('has-error');
    } else {
        cardNumberField.removeClass('has-error');
        cardNumberField.addClass('has-success');
    }

    if ($.payform.parseCardType(cardNumber.val()) == 'visa') {
        mastercard.addClass('transparent');
        amex.addClass('transparent');
    } else if ($.payform.parseCardType(cardNumber.val()) == 'amex') {
        mastercard.addClass('transparent');
        visa.addClass('transparent');
    } else if ($.payform.parseCardType(cardNumber.val()) == 'mastercard') {
        amex.addClass('transparent');
        visa.addClass('transparent');
    }
});

// confirmButton.click(function(e) {

//     e.preventDefault();

//     var isCardValid = $.payform.validateCardNumber(cardNumber.val());
//     var isCvvValid = $.payform.validateCardCVC(CVV.val());

//     if(owner.val().length < 5){
//         alert("Wrong owner name");
//     } else if (!isCardValid) {
//         alert("Wrong card number");
//     } else if (!isCvvValid) {
//         alert("Wrong CVV");
//     } else {
//         // Everything is correct. Add your form submission code here.
//         alert("Everything is correct");
//     }
// });
});

  </script>
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
  
    <!-- The HTML for our form will go here -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script src="payment/js/jquery.payform.min.js" charset="utf-8"></script>
    <!-- <script src="payment/js/script.js"></script> -->

</body>

</html>