<?php
session_start();
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
  <link rel="stylesheet" href="css/sports.css">
</head>

<body>
<?php
    require('navbar.php');
  ?>

<section class="game-details" style="border: none">
    <h2 class="h2" data-aos="zoom-in-up" style="margin-top: 40px; font-size: 2.4rem; text-align: center; margin-bottom: -6%;">BROWSE GAMES LIVE</h2>

  </section>
        <section class="watch-games">
          <div class="watch-games-container js-browse-games">
        
            </div>
        
          </section>


  <?php
    require('footer.php')
  ?>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
    	offset: 200, duration: 1200
    });
  </script>
  <script src="scripts/common.js"></script>
  <script src="scripts/gamesPage.js"></script>
  <script src="scripts/games.js"></script>
  <script src="scripts/browse.js"></script>
  <script src="scripts/footer-list.js"></script>
</body>
</html>