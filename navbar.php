  	<!--header-->
		<header class="sticky">
			<div class="logo" data-aos="zoom-in-up">
				<a class="navbar-brand" href="index.php"><h3>FunOlympic Games</h3>

				<figure class="logo-img"><img src="images/logo.png" alt="" /></figure>
				</a>
				

			</div>
		<ul class="navbar" data-aos="zoom-in-up">
			<li><a href="index.php">Home</a></li>
			<?php
			include './connection.php';
			 if(isset( $_SESSION['username'])){  ?>
			 <li><a href="./sports.php">Browse Games Live</a></li>
			 <?php } ?>

			<li><a href="./highlights.php">Match Highlights</a></li>
			
			
		</ul>
		<div class="h-btn" data-aos="zoom-in-up">
			<?php
			if(!isset( $_SESSION['username'])) {?>
			<a href="./userLogin.php" class="h-btn2"> Sign In</a>
			<?php } else {?>
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
		<?php } ?>
	</header>


	
