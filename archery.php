<?php
session_start();
include './connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FunOlymipic Games - Sports Page</title>
  <!---google fonts link-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	
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

    <section class="chatbox-section">
      <h2 style="margin-bottom: 30px; text-align: left; width: 50%">Browse the Archery Match Live Here</h2>
      <div class="chatbox-container">
        <div class="video">
           <iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/B5odGY2JRzI?si=YC1coSLJYJjjtOth&amp;start=521" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>

           </iframe>
        </div>
        <div class="chatbox">
        <div id="messages"></div>
        <form id="message-form">
          <input
            type="text"
            id="message-input"
            placeholder="Type your comment here..."
          />
          <button type="submit"><i class='bx bxs-send'></i></button>
        </form>
        </div>
      </div>
    </section>
    <?php
    require('footer.php')
  ?>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>

    AOS.init({
    	offset: 300, duration: 1200
    }); 
  </script>
  <script src="scripts/chatbox.js"></script>
  <script src="scripts/gamesPage.js"></script>
  <script src="scripts/games.js"></script>
  <script src="scripts/browse.js"></script>
  <script src="scripts/footer-list.js"></script>
</body>
</html>