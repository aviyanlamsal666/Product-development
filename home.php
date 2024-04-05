<?php
session_start();
include './connection.php';

if(!isset($_SESSION['username'])){
  header("location: index.php");
} else {

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
</head>
<body>
    	<!--header-->
      <header class="sticky">
			<div class="logo" data-aos="zoom-in-up">
				<a class="navbar-brand" href="index.php"><h3>FunOlympic Games</h3>

				<figure class="logo-img"><img src="images/logo.png" alt="" /></figure>
				</a>
				

			</div>
		<ul class="navbar" data-aos="zoom-in-up">
			<li><a href="index.php">Home</a></li>
			<li><a href="sports.php">Browse Games Live</a></li>
			<li><a href="./highlights.php">Match Highlights</a></li>
			
		</ul>
		<div data-aos="zoom-in-up" style="display: flex; justify-content: center; align-items: center; gap: 12px;">
    <div style="display: flex; flex-direction: column; position: relative;" id="js-showLogout">
		<a href="#" class="userInfo" ><img src="./images/user.avif" alt="User" ><span style="font-weight: 500; font-size: 18px; color: #4f4840;">
        <?php
          echo "Welcome " . $_SESSION['username'];
        ?>
      </span>
    </a>
      <ul  class="signoutToggle" id="js-logout">
        <li><a href="userLogout.php">Sign Out</a></li>
      </ul>
      </div>
			<div class="bx bx-menu" id="menu-icon"></div> 
		</div>
	</header>
  <section class="top-section">
    <div class="details" data-aos="zoom-in-up">
      <div class="time-date">
        <h3>FunOlympic Games Payris 2024 - </h3>
        <p>26 July - 11 August, 2024</p>
      </div>

      <div class="count-down-div"><iframe src="https://www.tickcounter.com/widget/countdown/4865425" title="Swastik Raj Pradhan Wanta" class="count-down"></iframe>
      </div>
    </div>
  </section>

  <section class="main-part">
      <div class="main-container" data-aos="zoom-in-up">
        <div class="main-title">
          <h1>FUNOLYMPIC <br> GAMES</h1>
        </div>
        <div class="main-about">
          <p>The FunOlympic Games stand as the singular international, multi-disciplinary sporting event that brings together nations from across the globe. Involving over 200 countries and spanning more than 400 competitions in both the Summer and Winter Games, the Olympics serve as a platform where nations unite to compete, find inspiration, and foster a sense of togetherness.</p>
        </div>
      </div>
  </section>
  
  <div  class="payris">
    <div class="payris-game" data-aos="zoom-in-up">
      <h2>Future Games</h4>
    </div>

    <div class="payris-image">
      <div class="card">
        <div class="card1">
          <div class="card1-content" data-aos="zoom-in-up">
            <h3>26 July - 11 August</h3>
            <h1>PAYRIS <br> 2024</h1>
          </div>
        </div> 
        <div>
          <div class="card2">
            <div class="card2-content" data-aos="zoom-in-up">
              <figure class="game-logo"><img src="images/paris_logo.png" alt=""></figure>

              <div class="explore-btn">
                <button>Explore <i class='bx bx-right-arrow-alt' style="font-size: 24px; vertical-align: middle;"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="cards-section" id="js-cards-section" data-aos="zoom-in-up">
  </section>

  <section class="game-details">
    <h2 class="h2" data-aos="zoom-in-up">AROUND THE <br> GAMES</h2>

    <div class="game-details-content js-game-details" data-aos="zoom-in-up">
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
<?php
}
?>