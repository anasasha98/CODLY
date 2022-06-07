<?php
session_start();
include './forms/connection.php';
// echo $username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <meta http-equiv="refresh" content="300">

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
</head>

<body>
  <!-- ======= Splash Screen ======= -->
  <!-- <div class="splash" data-aos="zoom-out-down"></div> -->
  <!-- End Splash Screen -->

  <!-- ======= Header ======= -->
  <?php include './headers/header1.php' ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Build your business with top freelancers</h1>
          <h2>
            Post a job for free and connect with independent talent today.
          </h2>
          <div class="d-flex justify-content-center justify-content-lg-start">

            <?php
            if (isset($_SESSION['username'])) {
              $username = $_SESSION['username'];
              $type = $_SESSION['type'];
            ?>
              <a class="btn-get-started scrollto" style="cursor: pointer;" href="#ser"><span>Get Started</span></a>
            <?php
            } else {
            ?>
              <a href="sign-up.php" class="btn-get-started scrollto"><span>Sign up</span></a>
            <?php
            }

            ?>

            <a href="https://www.youtube.com/embed/mFFID0vPOcE?cc_load_policy=1" class="glightbox btn-watch-video">
              <i class="bi bi-play-circle"></i>
              <span>Watch Video</span>
            </a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets\img\hero-img.png" class="img-fluid animated" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">
        <div class="row" data-aos="zoom-in">
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.mysql.com" target="_blank">
              <img src="assets/img/clients/client-1.png" class="img-fluid" alt="" />
            </a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.microsoft.com" target="_blank">
              <img src="assets/img/clients/client-2.png" class="img-fluid" alt="" />
            </a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.orange.com" target="_blank">
              <img src="assets/img/clients/client-3.png" class="img-fluid" alt="" />
            </a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.ahu.edu.jo" target="_blank">
              <img src="assets/img/clients/client-4.png" class="img-fluid" alt="" />
            </a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.paypal.com" target="_blank">
              <img src="assets/img/clients/client-5.png" class="img-fluid" alt="" />
            </a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.github.com" target="_blank">
              <img src="assets/img/clients/client-6.png" class="img-fluid" alt="" />
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Cliens Section -->

    <!-- ======= Features Section ======= -->
    <section>
      <div class="categories">
        <div class="small-container">
          <div class="section-title" data-aos="zoom-out">
            <h2>Our Features</h2>
          </div>

          <div class="row" id="fet">
            <div class="col-4">
              <abbr title="Creative Ideas">
                <img src="assets/img/creative-ideas.png" />
              </abbr>
              <h4>Creative Ideas</h4>
            </div>
            <div class="col-4">
              <abbr title="Technology">
                <img src="assets/img/technology.png" />
              </abbr>
              <h4>Technology</h4>
            </div>
            <div class="col-4">
              <abbr title="Ready Target">
                <img src="assets/img/ready-target.png" style="padding-top: 10px" />
              </abbr>
              <h4>Ready Target</h4>
            </div>
            <div class="col-4">
              <abbr title="Useful Tricks">
                <img src="assets/img/useful-tricks.png" style="padding-top: 10px" />
              </abbr>
              <h4>Useful Tricks</h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Features Section -->

    <!-- Start Service -->
    <section id="ser" class="service-wrapper py-3">
      <div class="container-fluid pb-3">
        <div class="row">
          <div class="section-title" data-aos="zoom-out" style="margin-bottom: -30px;">
            <h2>Services</h2>
          </div>
        </div>
        <div class="text-center service-heading text-start light-300">
          <i class="bx bx-gift h3 mt-1" style="padding-right: 1%;"></i>
          <h2 class="h3 pb-4 typo-space-line" style="display: contents;">
            Make Success for future
          </h2>
        </div>
      </div>
      <p class="service-footer col-10 offset-2 col-lg-9 offset-lg-3 text-start pb-3 text-muted px-2"></p>
    </section>

    <section class="container overflow-hidden py-5" style="margin-top: -50px ;">
      <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">
        <!-- Start Recent Work -->
        <?php
        $query = " SELECT * FROM `service-section` ";
        $result = mysqli_query($con, $query);
        if ($result) {
          while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        ?>
            <div class="col-xl-3 col-md-4 col-sm-6 project ui branding">
              <a href="detailed-service.php?sid=<?php echo $row['sec-id']; ?>&sname=<?php echo $row['sec-name']; ?>&sdesc=<?php echo $row['sec-desc']; ?> #ser " class=" service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="service card-img" src="./assets/img/<?php echo $row['sec-img'] ?>" alt="Card image" />
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                  <div class="service-work-content text-left text-light">
                    <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">
                      <?php
                      echo $row['sec-name'];
                      ?></span>
                    <!-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p> -->
                  </div>
                </div>

              </a>
            </div>
          <?php }
        } else {
          ?>
          <h5 class="h5 pb-4 typo-space-line text-center">
            <?php echo "❌ result is empty"; ?>
          </h5>
        <?php }
        ?>
        <!-- End Recent Work -->
      </div>
    </section>
    <!-- End Service -->

    <!-- ======= Counts Section ======= -->
    <br /><br />
    <section id="counts" class="counts section-bg" style="margin-top: -60px;">
      <div class="container">
        <div class="row">
          <div class="section-title" data-aos="zoom-out">
            <h2>Reviews</h2>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <!-- Happy Clients / Customers -->
              <span data-purecounter-start="0" data-purecounter-end="
              <?php
              $count1 = " SELECT COUNT(*) AS customer FROM `customer` ";
              $get_customer_count = mysqli_query($con, $count1);
              $customer_count = mysqli_fetch_array($get_customer_count, MYSQLI_ASSOC);
              echo $customer_count['customer'];
              ?>
              " data-purecounter-duration="1" data-purecounter-once="false" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <!-- Project / All service -->
              <span data-purecounter-start="0" data-purecounter-end="
              <?php
              $count2 = " SELECT COUNT(*) AS services FROM `service-provider` ";
              $get_service_count = mysqli_query($con, $count2);
              $service_count = mysqli_fetch_array($get_service_count, MYSQLI_ASSOC);
              echo $service_count['services'];
              ?>
              " data-purecounter-duration="1" data-purecounter-once="false" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <!-- Purchase Of Support / purchased services -->
              <span data-purecounter-start="0" data-purecounter-end="
              <?php
              $count3 = " SELECT COUNT(*) AS support FROM `purchase_list` ";
              $get_support_hours = mysqli_query($con, $count3);
              $support_hours = mysqli_fetch_array($get_support_hours, MYSQLI_ASSOC);
              echo $support_hours['support'];
              ?>
              " data-purecounter-duration="1" data-purecounter-once="false" class="purecounter"></span>
              <p>Purchased Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <!-- Hard Workers / captain -->
              <span data-purecounter-start="0" data-purecounter-end="
              <?php
              $count3 = " SELECT COUNT(*) AS captain FROM `captain` ";
              $get_captain_count = mysqli_query($con, $count3);
              $captain_count = mysqli_fetch_array($get_captain_count, MYSQLI_ASSOC);
              echo $captain_count['captain'];
              ?>
              " data-purecounter-duration="1" data-purecounter-once="false" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Counts Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include './footer/footer.php'; ?>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Bothelp.io widget -->
  <script type="text/javascript" style="z-index: -10000;">
    ! function() {
      var e = {
          "buttons": [{
            "type": "whatsapp",
            "token": "+962790875241"
          }, {
            "type": "messenger",
            "token": "https://www.facebook.com/Codly-109787618420231"
          }, {
            "type": "instagram",
            "token": "_codly"
          }],
          "color": "#47B2E4",
          "position": "right",
          "bottomSpacing": "60",
          "callToActionMessage": "Need Help?",
          "displayOn": "everywhere",
          "lang": "en"
        },
        t = document.location.protocol + "//bothelp.io",
        o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.src = t + "/widget-folder/widget-page.js", o.onload = function() {
        new BhWidgetPage.init(e)
      };
      var n = document.getElementsByTagName("script")[0];
      n.parentNode.insertBefore(o, n)
    }();
  </script>
  <!-- /Bothelp.io widget -->


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