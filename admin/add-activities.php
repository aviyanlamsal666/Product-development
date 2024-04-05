<?php
session_start(); //to start the session 
if (!isset($_SESSION['username'])) {
    header("location:dashboard.php");
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

        <title>FunOlympic Games Add Videos</title>
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

            <!-- End Forms Nav -->



            </ul>

        </aside><!-- End Sidebar-->

        <main id="main" class="main">

            <div class="pagetitle">
                <h1>Upload Videos</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Upload Videos</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <section class="section dashboard">
            <h1>Videos Information </h1>
            <table class="table table-border table-primary table-hover table-striped">
    <thead>
        <th>ID</th>
        <th>Title</th>
        <th>Video</th>  
        <th>Edit</th>
        <th>Delete</th>
    </thead>
    <tbody class="table-striped">
        <?php
            include "../connection.php";
            $query = "SELECT id, title, path FROM games"; // Select only relevant columns
            $run = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($run)) {
                $id = $row['id'];
                $title = $row['title'];
                $videoPath = $row['path']; // Assuming path stores the relative video path
        ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $title; ?></td>
            <td>
                <video width="200" height="150" controls>
                    <source src="<?php echo $videoPath; ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </td>
            <td>
                <a href="edit-activities.php?id=<?php echo $id; ?>" class="btn btn-success">Edit</a>
            </td>
            <td>
                <a href="delete-activites.php?id=<?php echo $id; ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>   
        <?php
            }
        ?>
    </tbody>
</table>

<h1>Add new video </h1>

<form action="" method="POST" enctype="multipart/form-data" onsubmit="{(event) => event.preventDefault() || addActivity()}">
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Title">
    </div>
    <br>
    <div class="form-group">
        <label for="video">Select Video</label>
        <input type="file" class="form-control-file" name="video" id="video" placeholder="">
    </div>
    <br>
    <button type="submit" name="submit" class="btn btn-primary">Upload</button>
    <button type="reset" name="reset" class="btn btn-danger">Cancel</button>
</form>
<?php
// Include database connection (replace with your details)
include "../connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Define upload directory
    $uploadDir = 'videos/';

    // Check if a file was uploaded
    if (isset($_FILES['video']['name'])) {
        // Get file details
        $fileName = $_FILES['video']['name'];
        $fileSize = $_FILES['video']['size'];
        $tmpName = $_FILES['video']['tmp_name'];
        $error = $_FILES['video']['error'];

        // Allowed extensions
        $allowedExtensions = array('mp4', 'avi', 'mov');

        // Validate file
        $extension = pathinfo($fileName, PATHINFO_EXTENSION);

        if (!in_array($extension, $allowedExtensions)) {
            echo "Error: Invalid file type. Only " . implode(', ', $allowedExtensions) . " allowed.";
            exit;
        }

        if ($error === 0) {
            // Upload the file
            $uploadPath = $uploadDir . $fileName;
            if (move_uploaded_file($tmpName, $uploadPath)) {
                // Get title from form
                $title = $_POST['title'];

                // Determine the MIME type
                $finfo = finfo_open(FILEINFO_MIME_TYPE);
                $videoType = finfo_file($finfo, $uploadPath);
                finfo_close($finfo);

                // Prepare database query
                $sql = "INSERT INTO games (title, type, path) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sss", $title, $videoType, $uploadPath);

                // Execute query
                if ($stmt->execute()) {
                    echo "Video uploaded successfully! Video ID: " . $stmt->insert_id;
                } else {
                    echo "Error inserting video data: " . $conn->error;
                }

                $stmt->close();
            } else {
                echo "Error uploading file.";
            }
        } else {
            echo "Upload error: " . $error;
        }
    } else {
        echo "Please select a video file to upload.";
    }
}
?>
            </section>

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="copyright">
                &copy; Copyright <strong><span>Funolympic Games - Payris 2024</span></strong>. All Rights Reserved
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