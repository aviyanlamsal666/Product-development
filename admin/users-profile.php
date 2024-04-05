<?php
session_start(); //to start the session 
if (!isset($_SESSION['username'])) {
  header("location:index.php");
} else {
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Users / Profile - FunOlympic Games</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

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
          <img src="../images/logo.png" alt="" />
          <span class="d-none d-lg-block">FunOlympics Games</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>
      <!-- End Logo -->

      <div class="search-bar">
        <form
          class="search-form d-flex align-items-center"
          method="POST"
          action="#"
        >
          <input
            type="text"
            name="query"
            placeholder="Search"
            title="Enter search keyword"
          />
          <button type="submit" title="Search">
            <i class="bi bi-search"></i>
          </button>
        </form>
      </div>
      <!-- End Search Bar -->

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle" href="#">
              <i class="bi bi-search"></i>
            </a>
          </li>
          <!-- End Search Icon-->



          <li class="nav-item dropdown pe-3">
            <a
              class="nav-link nav-profile d-flex align-items-center pe-0"
              href="#"
              data-bs-toggle="dropdown"
            >
              <img
                src="../images/user.avif"
                alt="Profile"
                class="rounded-circle"
              />
              <span class="d-none d-md-block dropdown-toggle ps-2">
              <?php echo $_SESSION['username']; ?>
            </span> </a
            ><!-- End Profile Iamge Icon -->

            <ul
              class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile"
            >
              <li class="dropdown-header">
              <span class="d-none d-md-block dropdown-toggle ps-2">
              <?php echo $_SESSION['username']; ?>
            </span>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a
                  class="dropdown-item d-flex align-items-center"
                  href="users-profile.php"
                >
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="logout.php">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </a>
              </li>
            </ul>
            <!-- End Profile Dropdown Items -->
          </li>
          <!-- End Profile Nav -->
        </ul>
      </nav>
      <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

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

    </ul>

  </aside><!-- End Sidebar-->
    <!-- End Sidebar-->

    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item">Users</li>
            <li class="breadcrumb-item active">Profile</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class="section profile">
        <div class="row">
          <div class="col-xl-4">
            <div class="card">
              <div
                class="card-body profile-card pt-4 d-flex flex-column align-items-center"
              >
                <img
                  src="../images/user.avif"
                  alt="Profile"
                  class="rounded-circle"
                />
                <h2 class="d-none d-md-block dropdown-toggle ps-2">
             <?php echo $_SESSION['username']; ?>
            </h2>
                <div class="social-links mt-2">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="facebook"
                    ><i class="bi bi-facebook"></i
                  ></a>
                  <a href="#" class="instagram"
                    ><i class="bi bi-instagram"></i
                  ></a>
                  <a href="#" class="linkedin"
                    ><i class="bi bi-linkedin"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-8">
            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">
                  <li class="nav-item">
                    <button
                      class="nav-link active"
                      data-bs-toggle="tab"
                      data-bs-target="#profile-overview"
                    >
                      Overview
                    </button>
                  </li>

                  <li class="nav-item">
                    <button
                      class="nav-link"
                      data-bs-toggle="tab"
                      data-bs-target="#profile-edit"
                    >
                      Edit Profile
                    </button>
                  </li>

                  <!-- <li class="nav-item">
                    <button
                      class="nav-link"
                      data-bs-toggle="tab"
                      data-bs-target="#profile-settings"
                    >
                      Settings
                    </button>
                  </li> -->

                  <li class="nav-item">
                    <button
                      class="nav-link"
                      data-bs-toggle="tab"
                      data-bs-target="#profile-change-password"
                    >
                      Change Password
                    </button>
                  </li>
                </ul>
                <?php
                    include "../connection.php";
                    $query = "select * from users where username= '$_SESSION[username]' ";
                    $run = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($run)) {
                        $a = $row['id'];
                        $b = $row['first_name'];
                        $c = $row['last_name'];
                        $d = $row['username'];
                        $e = $row['password'];

                        ?>
                <div class="tab-content pt-2">
                  <div
                    class="tab-pane fade show active profile-overview"
                    id="profile-overview"
                  >
                    <h5 class="card-title">About</h5>
                    <p class="small fst-italic">
                      This is FunOlympic Games Payris 2024.
                    </p>

                    <h5 class="card-title">Profile Details</h5>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Full Name</div>
                      <div class="col-lg-9 col-md-8" id="Name"><?php echo  "$b $c"?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Company</div>
                      <div class="col-lg-9 col-md-8">
                        FunOlympic Games
                      </div>
                    </div>
                  </div>
                     
                  <div
                    class="tab-pane fade profile-edit pt-3"
                    id="profile-edit"
                  >
                    <!-- Profile Edit Form -->
                    <form action="update-users.php">
                      <div class="row mb-3">
                        <label
                          for="profileImage"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Profile Image</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <img src="../images/user.avif" alt="Profile" />
                          <!-- <div class="pt-2">  
                            <a
                              href="#"
                              class="btn btn-primary btn-sm"
                              title="Upload new profile image"
                              ><i class="bi bi-upload"></i
                            ></a>
                            <a
                              href="#"
                              class="btn btn-danger btn-sm"
                              title="Remove my profile image"
                              ><i class="bi bi-trash"></i
                            ></a>
                          </div> -->
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="fname"
                          class="col-md-4 col-lg-3 col-form-label"
                          >First Name</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="fname"
                            type="text"
                            class="form-control"
                            id="fname"
                            value="<?php echo "$b";?>"
                          />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label
                          for="lname"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Last Name</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="lname"
                            type="text"
                            class="form-control"
                            id="lname"
                            value="<?php echo "$c";?>"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="about"
                          class="col-md-4 col-lg-3 col-form-label"
                          >About</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <textarea
                            name="about"
                            class="form-control"
                            id="about"
                            style="height: 100px"
                          >This is FunOlympic Games Payris 2024.</textarea
                          >
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="company"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Company</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="company"
                            type="text"
                            class="form-control"
                            id="company"
                            value="Funolympic Games"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="Twitter"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Twitter Profile</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="twitter"
                            type="text"
                            class="form-control"
                            id="Twitter"
                            value="https://twitter.com/#"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="Facebook"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Facebook Profile</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="facebook"
                            type="text"
                            class="form-control"
                            id="Facebook"
                            value="https://facebook.com/#"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="Instagram"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Instagram Profile</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="instagram"
                            type="text"
                            class="form-control"
                            id="Instagram"
                            value="https://instagram.com/#"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="Linkedin"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Linkedin Profile</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="linkedin"
                            type="text"
                            class="form-control"
                            id="Linkedin"
                            value="https://linkedin.com/#"
                          />
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary" id="saveChanges">
                          Save Changes
                        </button>
                      </div>
                    </form>
                    <!-- End Profile Edit Form -->
                  </div>
                  <?php
                  }
                  ?>

                  <?php
                    include "../connection.php";
                    $query = "select * from users where username= '$_SESSION[username]' ";
                    $run = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($run)) {
                        $a = $row['id'];
                        $b = $row['first_name'];
                        $c = $row['last_name'];
                        $d = $row['username'];
                        $e = $row['password'];

                        ?>
                  
                  <div class="tab-pane fade pt-3" id="profile-change-password">
                    <!-- Change Password Form -->
                    <form action="" method="POST"> 
                      <div class="row mb-3">
                        <label
                          for="currentPassword"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Current Password</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="currentPassword"
                            type="password"
                            class="form-control"
                            id="currentPassword"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="newPassword"
                          class="col-md-4 col-lg-3 col-form-label"
                          >New Password</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="newPassword"
                            type="password"
                            class="form-control"
                            id="newPassword"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="renewPassword"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Re-enter New Password</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="renewPassword"
                            type="password"
                            class="form-control"
                            id="renewPassword"
                          />
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" name="submit" id="submit" class="btn btn-primary">
                          Change Password
                        </button>
                      </div>
                    </form>
                    <?php
// Include database connection (replace with your details)
include '../connection.php';

if (isset($_POST["submit"])) {
  $username = $_SESSION['username']; 
  $currentPassword = $_POST['currentPassword'];
  $newPassword = $_POST['newPassword'];
  $retypePassword = $_POST['renewPassword'];

  // Error handling and validation
  $errors = [];

  if (empty($currentPassword)) {
    $errors[] = "Current password is required.";
  }

  if (empty($newPassword)) {
    $errors[] = "New password is required.";
  } else if (strlen($newPassword) < 3) {
    $errors[] = "New password must be at least 3 characters long.";
  }

  if ($newPassword !== $retypePassword) {
    $errors[] = "New password and retyped password do not match.";
  }

  // Check current password (if no errors)
  if (empty($errors)) {
    $sql = "SELECT password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {

      if (password_verify($currentPassword, $e)) {
        $errors[] = "Current password is incorrect.";
      }
    } else {
      $errors[] = "Error: User not found!";
    }

    $stmt->close();
  }
  // Update password (if no errors)
  if (empty($errors)) {
    $hashedNewPassword = $newPassword; // Hash new password securely

    $sql = "UPDATE users SET password = ? WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $hashedNewPassword, $username);
    $stmt->execute();

    if ($stmt->affected_rows === 1) {
      echo "<div id='changed' style='color: #3d8c40; font-weight: bold; font-size: 18px; margin-top: 12px;'>Password changed successfully!
      <script>
      const pass = document.getElementById('changed');
      setTimeout(() => {
        pass.style.display = 'none';
      }, 3000);
      </script>
      
      ";
    } else {
      echo "<div id='errored' style='color: #960019; font-weight: bold; font-size: 18px; margin-top: 12px;'>Error updating password.
      <script>
      const error = document.getElementById('errored');
      setTimeout(() => {
        error.style.display = 'none';
      }, 3000);
      </script>
      
      ";
    }

    $stmt->close();
  }

  // Display errors (if any)
  if (!empty($errors)) {
    echo "<b>Errors:</b><br>";
    foreach ($errors as $error) {
      echo "- $error<br>";
    }
  }
}
                    }
?>

                    <!-- End Change Password Form -->
                  </div>
                 
                </div>
                <!-- End Bordered Tabs -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy; Copyright <strong><span>FunOlympic Games - Payris 2024</span></strong
        >. All Rights Reserved
      </div>
      
    </footer>
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

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
