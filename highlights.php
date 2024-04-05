<?php
session_start();
include './connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FunOlymipic Games - Home Page</title>
  <!---google fonts link-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="shortcut icon" href="" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
  <link rel="stylesheet" href="css/chatbox.css">
</head>
<body>
  <?php
    require('navbar.php');
  ?>
 
 <?php
// Include database connection (replace with your details)
include './connection.php';

$sql = "SELECT * FROM games"; // Adjust table name if needed
$run = mysqli_query($conn, $sql);
?>

<section class="chatbox-section" style="margin-bottom: 20px;">
<?php
    if ($run->num_rows > 0) {
      while ($row = mysqli_fetch_assoc($run)) {
        $videoTitle = $row['title']; // Assuming 'title' column exists
        $videoPath = $row['path']; // Assuming 'path' column stores video location
    ?>
  <div class="chatbox-container" style="flex-direction: column; gap: 16px;">
    <h2 style="margin-bottom: 20px; text-align: center; width: 100%"><?php echo $videoTitle?></h2>

    <div class="video" style="align-items: flex-start; margin-bottom: 60px;">
      <div style="aspect-ratio: 16/9; object-fit: cover;">
       <video src="./admin/<?php echo $videoPath; ?>" style="width: 100%;" controls></video>
      </div>
    </div>

    <?php
      }
    } else {
      echo "No videos found!";
    }
    ?>

  </div>
</section>

<?php
// Optional: Close database connection
mysqli_close($conn);
?>
  <!-- <section class="chatbox-section">
      <h2 style="margin-bottom: 20px; text-align: center; width: 100%">Watch Archery Match Live Here</h2>
      <div class="chatbox-container">
        <div class="video" style="align-items: flex-start;">
        <iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/B5odGY2JRzI?si=YC1coSLJYJjjtOth&amp;start=521" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>

</iframe>
        </div>
  </section>
  <section class="chatbox-section">
      <h2 style="margin-bottom: 20px; text-align: center; width: 100%">Watch Boxing Match Live Here</h2>
      <div class="chatbox-container">
        <div class="video" style="align-items: flex-start;">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/GMw05vH53TM?si=KUWHOkuPyNyQkUqE&amp;start=300" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
  </section>
  <section class="chatbox-section">
      <h2 style="margin-bottom: 20px; text-align: center; width: 100%">Watch Cycling Match Live Here</h2>
      <div class="chatbox-container">
        <div class="video" style="align-items: flex-start;">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/2RlLmK5WM_s?si=bwIm4IMghKJBzYH3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
  </section>

  <section class="chatbox-section">
      <h2 style="margin-bottom: 20px; text-align: center; width: 100%"></h2>
      <div class="chatbox-container">
        <div class="video" style="align-items: flex-start;">
        <iframe width="100%" height="100%" src="  " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
  </section> -->


  <?php
    require('footer.php')
  ?>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
    	offset: 300, duration: 1200
    });
  </script>
  <script src="scripts/common.js"></script>
  <script src="https://cdn.logwork.com/widget/countdown.js"></script>
  <script src="scripts/cards.js"></script>
  <script src="scripts/cards-section.js"></script>
  <script src="scripts/gameDetails.js"></script>
  <script src="scripts/detailsSection.js"></script>
  <script src="scripts/games.js"></script>
  <script src="scripts/footer-list.js"></script>
</body>
</html>