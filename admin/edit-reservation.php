<?php
session_start(); //to start the session 
if (!isset($_SESSION['username'])) {
    header("location:index.php");
} else {
    ?>
    <!-- bootstrap start  -->
    <!doctype html>
    <html lang="en">
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Treeland Admin</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="../images/favicon.png" rel="icon">


        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
        <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">

        <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    </head>

    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">

            <div class="d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center">
                    <img src="../images/favicon.png" alt="">
                    <span class="d-none d-lg-block">Treeland</span>
                </a>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- End Logo -->

            <div class="search-bar">
                <form class="search-form d-flex align-items-center" method="POST" action="#">
                    <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                </form>
            </div><!-- End Search Bar -->

            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">

                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link nav-icon search-bar-toggle " href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </li><!-- End Search Icon-->



                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <img src="../images/user.avif" alt="Profile" class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2">
                                <?php echo $_SESSION['username']; ?>
                            </span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6>
                                    <?php echo $_SESSION['username']; ?>
                                </h6>

                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                    <i class="bi bi-person"></i>
                                    <span>My Profile</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                    <i class="bi bi-gear"></i>
                                    <span>Account Settings</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                    <i class="bi bi-question-circle"></i>
                                    <span>Need Help?</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="logout.php">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </a>
                            </li>

                        </ul><!-- End Profile Dropdown Items -->
                    </li><!-- End Profile Nav -->

                </ul>
            </nav><!-- End Icons Navigation -->

        </header><!-- End Header -->

        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">

            <ul class="sidebar-nav" id="sidebar-nav">

                <li class="nav-item">
                    <a class="nav-link " href="dashboard.php">
                        <i class="bi bi-grid"></i>
                        <span>Dashboard</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link " href="users.php">
                        <i class="bi bi-menu-button-wide"></i><span>Users</span>
                    </a>

                </li><!-- End Components Nav -->

                <li class="nav-item">
                    <a class="nav-link " href="reservation.php">
                        <i class="bi bi-journal-text"></i><span>Reservation</span>
                    </a>

                </li><!-- End Forms Nav -->
                <li class="nav-item">
                     <a class="nav-link " href="add-activities.php">
                        <i class="bi bi-journal-text"></i><span>Activities</span>
                    </a>

                </li><!-- End Forms Nav -->
                <li class="nav-item">
                    <a class="nav-link " href="add-post.php">
                        <i class="bi bi-file-post"></i><span>Add Posts</span>
                    </a>

                </li><!-- End Forms Nav -->

                <li class="nav-item">
                    <a class="nav-link nav-link-collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-image"></i><span>Upload Image</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="slider1.php">
                                <i class="bi bi-circle"></i><span>Slider1</span>
                            </a>
                        </li>
                        <li>
                            <a href="slider2.php">
                                <i class="bi bi-circle"></i><span>Slider2</span>
                            </a>
                        </li>
                        <li>
                            <a href="slider3.php">
                                <i class="bi bi-circle"></i><span>Slider3</span>
                            </a>
                        </li>
                        <li>
                            <a href="slider4.php">
                                <i class="bi bi-circle"></i><span>Slider4</span>
                            </a>
                        </li>
                        <li>
                            <a href="slider5.php">
                                <i class="bi bi-circle"></i><span>Slider5</span>
                            </a>
                        </li>
                        <li>
                            <a href="slider6.php">
                                <i class="bi bi-circle"></i><span>Slider6</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Forms Nav -->


            </ul>

        </aside><!-- End Sidebar-->

        <main id="main" class="main">

            <div class="pagetitle">
                <h1>Dashboard</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <section class="section dashboard">

                <h1>Modify Reservation</h1>
                <form action="update-reservation.php" method="GET">
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" name="id1" id="id1" class="form-control" value="<?php echo $_GET['id']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name1" id="name1" class="form-control"
                            value="<?php echo $_GET['name']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone1" id="phone1" class="form-control"
                            value="<?php echo $_GET['phone']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email1" id="email1" class="form-control"
                            value="<?php echo $_GET['email']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="checkin_date">Checkin Date</label>
                        <input type="text" name="checkin_date1" id="checkin_date1" class="form-control"
                            value="<?php echo $_GET['checkin_date']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="checkout_date">Checkout Date</label>
                        <input type="text" name="checkout_date1" id="checkout_date1" class="form-control"
                            value="<?php echo $_GET['checkout_date']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="adults">Adults</label>
                        <input type="text" name="adults1" id="adults1" class="form-control"
                            value="<?php echo $_GET['adults']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="children">Children</label>
                        <input type="text" name="children1" id="children1" class="form-control"
                            value="<?php echo $_GET['children']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <input type="text" name="message1" id="message1" class="form-control"
                            value="<?php echo $_GET['message']; ?>">
                    </div>

                    <button type="submit" name="submit" class="btn btn-success btn-lg">Update</button>
                    <button type="reset" name="reset" class="btn btn-danger btn-lg">Cancel</button>
                </form>
                </div>
            </section>

        </main><!-- End #main -->


        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="copyright">
                &copy; Copyright <strong><span>Treeland</span></strong>. All Rights Reserved
            </div>
            
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/chart.js/chart.umd.js"></script>
        <script src="assets/vendor/echarts/echarts.min.js"></script>
        <script src="assets/vendor/quill/quill.min.js"></script>
        <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="assets/vendor/tinymce/tinymce.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

    </body>

    </html>
    <?php
}

?>