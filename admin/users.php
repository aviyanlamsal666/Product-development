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

        <title>FunOlympic Games Users</title>
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
                <a href="dashboard.php" class="logo d-flex align-items-center">
                    <img src="../images/favicon.png" alt="">
                    <span class="d-none d-lg-block">FunOlympic Games</span>
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
                                <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                                    <i class="bi bi-person"></i>
                                    <span>My Profile</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
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
                    <i class="bi bi-person-lock"></i><span>Admins</span>
                    </a>

                </li><!-- End Components Nav -->
                <li class="nav-item">
                    <a class="nav-link " href="signUps.php">
                    <i class="bi bi-people"></i><span>Sign Ups</span>
                    </a>

                </li><!-- End Components Nav -->

                <li class="nav-item">
                    <a class="nav-link " href="add-activities.php">
                    <i class="bi bi-camera-video"></i><span>Upload Videos</span>
                    </a>
                </li><!-- End Forms Nav -->
            


                </li><!-- End Forms Nav -->

            


            </ul>

        </aside><!-- End Sidebar-->

        <main id="main" class="main">

            <div class="pagetitle">
                <h1>Admins</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Admins</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <section class="section dashboard">

                <h1>Admin Information </h1>
                <table class="table table-border table-primary table-hover table-striped">
                    <thead>
                        <th>UserID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </thead>
                    <?php
                    include "../connection.php";
                    $query = "select * from users";
                    $run = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($run)) {
                        $a = $row['id'];
                        $b = $row['first_name'];
                        $c = $row['last_name'];
                        $d = $row['username'];
                        $e = $row['password'];

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
                                <?php echo md5(base64_encode($e)); ?>
                            </td>
                            <td>
                                <a href="edit-user.php?id=<?php echo $a; ?> &fname=<?php echo $b; ?> &lname=<?php echo $c ?> &username=<?php echo $d ?> &password=<?php echo md5(base64_encode($e)); ?>"
                                    class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <a href="delete.php?id=<?php echo $a; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tbody>

                        <?php
                    }
                    ?>
                </table>
                <h1>Add new admin </h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="fname">First Name:</label>
                        <input type="text" class="form-control" name="fname" id="fname" aria-describedby="helpId" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="lname">Title:</label>
                        <input type="text" class="form-control" name="lname" id="lname" aria-describedby="helpId"
                            placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId"
                            placeholder=" Username">
                    </div>  
                    <br>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary">Create</button>
                    <button type="reset" name="reset" class="btn btn-danger">cancel</button>
                </form>
                <br>
                <?php
                include '../connection.php';
                if (isset($_POST["submit"])) {
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $username = $_POST['username'];
                    
                    if (empty($fname ) ||  empty($lname) || empty($username) || empty($_POST['password']) ) {
                        $errorMessage = "Please fill out all the fields";
                    } else if(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $_POST["password"])){
                        $errorMessage = "Password must contain at least 8 characters including one Uppercase Letter, Lowercase Letter, Number, and Symbol.";
                    }
                    else {
                        $password = md5($_POST['password']);
                        $query = "INSERT into users(first_name, last_name ,username, password) values ('$fname','$lname','$username','$password')";
                        $run = mysqli_query($conn, $query);
                        if ($run) {
                            echo "<div class='alert alert-success '>New User Created! 
                            </div>
                            <script>
                            const user = document.querySelector('.alert');
                            setTimeout(() => {
                              user.style.display = 'none';
                            }, 3000);
                            </script>
                            ";
                        } else {
                           $errorMessage = "Error: ". mysqli_error($conn);
                        }
                    }
                }
                ?>
            </section>

        </main><!-- End #main -->


        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>FunOlympic Games - Payris 2024</span></strong>. All Rights Reserved
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