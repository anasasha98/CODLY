<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
  <div class="container d-flex align-items-center">
    <h1 class="logo me-auto"><a href="index.php">codly</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar">
      <ul>
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
              <li><a href="<?php echo $_SESSION['type'] ?>-account-details.php">Profile</a></li>
              <?php
              if ($_SESSION['type'] == 'captain') {
                echo '<li><a href="captain-about-page.php">About</a></li>';
              }
              ?>
              <li><a href="<?php echo $_SESSION['type'] ?>-security-page.php">Security</a></li>
              <?php
              if ($_SESSION['type'] == 'captain') {
                echo '<li><a href="captain-add-service.php">Publish serivce</a></li>';
                echo '<li><a href="captain-add-service.php">Publish serivce</a></li>';
              } ?>
              <li><a href="<?php echo $_SESSION['type'] ?>-purchase.php">Purchased Service</a></li>
              <?php
              if ($_SESSION['type'] == 'captain') {
                echo '<li><a href="captain-work.php">My Work</a></li>';
              }
              ?>
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