<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://kit.fontawesome.com/07c150b60f.js" crossorigin="anonymous"></script>
  <title>FunOlympic Games - 2024 Payris</title>
</head>
<body>
  <div class="signinForm-Container">
    
    <form action="" method="POST">
      <div class="formControl">
      <label for="username">Username: </label>
      <input type="text" id="username" name="username"  />
      </div>
      
      <div class="formControl">
      <label for="password">Password: </label>
      <input class="js-showPassword" type="password" id="password" name="password"  />
      <i class="fa-regular fa-eye" id="js-eye"></i>
      </div>
      
      <button type="submit" name="submit">Sign In</button>
    </form>
    <?php
      include '../connection.php';
      if(isset($_POST['submit']))
      {
        $a=$_POST['username'];
        $b=$_POST['password'];
        $query="select * from users where username='$a' and password='$b'";
        $run=mysqli_query($conn,$query);
        if(mysqli_num_rows($run)>0)
        {
          $_SESSION['username']=$a;
          echo "<script>window.open('dashboard.php','_self')</script>";
        }
        else
        {
          echo "<script>window.alert('Invalid User!')</script>";
        }
      }
      mysqli_close($conn);
    ?>
  </div>

  <script src="../scripts/showPassword.js"></script>
</body>
</html>