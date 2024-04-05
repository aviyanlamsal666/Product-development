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
            <h1>Posts Information </h1>
                <table class="table table-border table-primary table-hover table-striped">
                    <thead>
                        <th>id</th>
                        <th>Date</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </thead>
                    <?php
                    include "../connection.php";
                    $query = "select * from posts";
                    $run = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($run)) {
                        $a = $row['id'];
                        $b = $row['date'];
                        $c = $row['title'];
                        $d = $row['content'];
                        $e = $row['image'];

                        ?>
                        <tbody class="table-striped ">
                            <td>
                                <?php echo $a; ?>
                            </td>
                            <td>
                                <?php echo $b; ?>
                            </td>
                            <td>
                                <?php echo $c; ?>
                            </td>
                            <td>
                                <?php echo $d; ?>
                            </td>
                            <td>
                                <?php echo $e; ?>
                            </td>
                            <td>
                                <a href="edit-post.php?id=<?php echo $a; ?> &date=<?php echo $b; ?> &title=<?php echo $c ?> &content=<?php echo $d ?> &image=<?php echo $e ?>"
                                    class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <a href="deleteposts.php?id=<?php echo $a; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tbody>

                        <?php
                    }
                    ?>
                </table>

                <h1>Add new post </h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Date:</label>
                        <input type="text" class="form-control" name="date" id="date" aria-describedby="helpId"
                            placeholder="Month/Day/Year">
                    </div>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                            placeholder="title">
                    </div>
                    <div class="form-group">
                        <label for="Content">content:</label>
                        <textarea class="form-control" name="content" id="content" rows="5" aria-describedby="helpId"
                            placeholder="content"></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="select image">Select image</label>
                        <input type="file" class="form-control-file" name="image" id="image" placeholder="">
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary">upload</button>
                    <button type="reset" name="reset" class="btn btn-danger">cancel</button>
                </form>
                <br>
                <?php
                include '../connection.php';
                if (isset($_POST["submit"])) {
                    $date = $_POST['date'];
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    $image_name = $_FILES['image']['name'];
                    $image_type = $_FILES['image']['type'];
                    $image_tmp = $_FILES['image']['tmp_name'];
                    if ($title == "" || $content == "" || $image_name == "") {
                        echo "<div class='alert alert-danger'> Some fields are empty! </div>";
                    } else {

                        move_uploaded_file($image_tmp, "../images/$image_name");
                        $query = "Insert into posts(date, title ,content, image) values ('$date','$title','$content','$image_name')";
                        $run = mysqli_query($conn, $query);
                        if ($run) {
                            echo "<div class='alert alert-success '>uploaded successfully! 
                            </div>";
                        } else {
                            echo "<div class='alert alert-danger '>Error found!
                             </div>";
                        }
                    }
                }
                ?>
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