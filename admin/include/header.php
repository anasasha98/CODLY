

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>All Services || Admin Panel</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script data-search-pseudo-elements defer src="js/all.min.js"></script>
    <script src="js/feather.min.js"></script>
</head>

<body class="nav-fixed">
    <nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
        <a class="navbar-brand d-none d-sm-block" href="index.html">Admin Panel</a><button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i data-feather="menu"></i></button>
        <ul class="navbar-nav align-items-center ml-auto">

            <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="bell"></i></a>

                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
                    <h6 class="dropdown-header dropdown-notifications-header"><i class="mr-2" data-feather="bell"></i>Alerts Center</h6>
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-warning"><i data-feather="activity"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 29, 2022</div>
                            <div class="dropdown-notifications-item-content-text">This is an alert message. It&apos;s
                                nothing serious, but it requires your attention.</div>
                        </div>
                    </a><a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-info"><i data-feather="bar-chart"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 22, 2022</div>
                            <div class="dropdown-notifications-item-content-text">A new monthly report is ready. Click
                                here to view!</div>
                        </div>
                    </a><a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-danger"><i class="fas fa-exclamation-triangle"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 8, 2022</div>
                            <div class="dropdown-notifications-item-content-text">Critical system failure, systems
                                shutting down.</div>
                        </div>
                    </a><a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-success"><i data-feather="user-plus"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 2, 2022</div>
                            <div class="dropdown-notifications-item-content-text">New user request. Woody has requested
                                access to the organization.</div>
                        </div>
                    </a><a class="dropdown-item dropdown-notifications-footer" href="#!">View All Alerts</a>
                </div>
            </li>

            <li class="nav-item dropdown no-caret mr-3 dropdown-user">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="./assets/img/user.jpg" /></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                    <h6 class="dropdown-header d-flex align-items-center">

                        <div class="dropdown-user-details">
                            <div class="dropdown-user-details-name">codly admin</div>
                            <div class="dropdown-user-details-email">codly@email.com</div>
                        </div>
                    </h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">
                        <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>



    <!--Side Nav-->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right sidenav-light">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">

                        <a class="nav-link collapsed" href="all-services-published.html" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="nav-link-icon"><i data-feather="layout"></i></div>
                            services
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <a href="all-services-published.html">
                            <div class="collapse" id="collapseLayouts" data-parent="#accordionSidenav">
                        </a>
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                            <a class="nav-link" href="all-services-published.html">All services published</a>
                            <a class="nav-link" href="all-services-purchased.html">All services purchased</a>

                        </nav>
                    </div>
                    <a class="nav-link" href="users.html">
                        <div class="nav-link-icon"><i data-feather="users"></i></div>
                        Users
                    </a>
                    <a class="nav-link" href="captains.html">
                        <div class="nav-link-icon"><i data-feather="user"></i></div>
                        Captains
                    </a>
                    <a class="nav-link" href="contact-messages.html">
                        <div class="nav-link-icon"><i data-feather="mail"></i></div>
                        Contact Message
                    </a>
                    <a class="nav-link" href="complaint.html">
                        <div class="nav-link-icon"><i data-feather="mail"></i></div>
                        Complaint
                    </a>



                </div>
        </div>



        </nav>
    </div>


    <div id="layoutSidenav_content">
        <main>