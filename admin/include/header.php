<?php
session_start();

include '../forms/connection.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="assets/img/c.png" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>All Services || Admin Panel</title>
    <link href="css/styles.css" rel="stylesheet" />

    <script data-search-pseudo-elements defer src="js/all.min.js"></script>
    <script src="js/feather.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</head>

<body class="nav-fixed">
    <nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
        <a class="navbar-brand d-none d-sm-block" href="index.php">Admin Panel</a><button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i data-feather="menu"></i></button>
        <ul class="navbar-nav align-items-center ml-auto">


            <?php
            if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];


            ?>
                <li class="nav-item dropdown no-caret mr-3 dropdown-user">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php if ($_SESSION['image'] == '') {
                                                                                                                                                                                                                                echo '<img class="img-fluid" src="assets/img/img_avatar.png">';
                                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                                echo $ext = pathinfo($_SESSION['image'], PATHINFO_EXTENSION);
                                                                                                                                                                                                                                echo '<img class="img-fluid" src="data:image/' . $ext . ';base64,' . base64_encode($_SESSION['image']) . '" />';
                                                                                                                                                                                                                            } ?> </a>
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                        <h6 class="dropdown-header d-flex align-items-center">

                            <div class="dropdown-user-details">
                                <div class="dropdown-user-details-name"><?php echo $username; ?></div>
                                <div class="dropdown-user-details-email"><?php echo $_SESSION['email']; ?></div>
                            </div>
                        </h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="include/logout.php">
                            <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                            Logout
                        </a>

                    </div>


                </li>
            <?php
            } else {
                echo "❌ result is empty";
            }
            ?>


        </ul>

    </nav>



    <!--Side Nav-->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right sidenav-light">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">

                        <a class="nav-link collapsed" href="all-services-published.php" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="nav-link-icon"><i data-feather="layout"></i></div>
                            services
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <a href="all-services-published.php">
                            <div class="collapse" id="collapseLayouts" data-parent="#accordionSidenav">
                        </a>
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                            <a class="nav-link" href="all-services-published.php">All services published</a>
                            <a class="nav-link" href="all-services-purchased.php">All services purchased</a>

                        </nav>
                    </div>
                    <a class="nav-link" href="customer.php">
                        <div class="nav-link-icon"><i data-feather="users"></i></div>
                        Customer
                    </a>
                    <a class="nav-link" href="captains.php">
                        <div class="nav-link-icon"><i data-feather="user"></i></div>
                        Captains
                    </a>
                    <a class="nav-link" href="contact-messages.php">
                        <div class="nav-link-icon"><i data-feather="mail"></i></div>
                        Contact Message
                    </a>
                    <a class="nav-link" href="complaint.php">
                        <div class="nav-link-icon"><i data-feather="mail"></i></div>
                        Complaint
                    </a>

                    <a class="nav-link" href="include/logout.php">
                        <div class="nav-link-icon"><i data-feather="log-out"></i></div>
                        Logout
                    </a>


                </div>
        </div>



        </nav>
    </div>


    <div id="layoutSidenav_content">
        <main>