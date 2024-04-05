<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign in to FunOlympic Games</title>
  <link rel="stylesheet" href="./css/userLogin.css">
  <script src="https://kit.fontawesome.com/07c150b60f.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="logo">
   <a href="./index.php"> <img src="./images/logo.png" alt="logo"></a>
  </div>

    <div class="form-Container">
      <h2>Sign In to FunOlympic Games</h2>
      <form action="" method="POST">
        <div class="form-control">
          <label for="username">Username</label>
          <input type="text" id="username" name="username">
        </div>
        <div class="form-control">
          <label for="password">Password</label>
          <input type="password" name="password" id="password"><i class="fa-regular fa-eye" id="cpassEye" onclick="showPassword()"></i>
        </div>
        <div class="btn">
        <button type="submit" name="submit">Sign In</button>
        </div>

      </form>
        <?php
        include "./connection.php";

          if (isset($_POST['submit'])) {
            $username = $_POST["username"];
            $password = md5($_POST["password"]);

            if(empty($username) || empty($password)){
              echo "<p style='color:red; margin: 12px 12px; font-size: 18px;'>All fields are required!</p>";
            } else{
              $query = "SELECT * FROM signup WHERE username = '$username' AND  password = '$password' ";
              $run = mysqli_query($conn, $query);

              if(mysqli_num_rows($run) > 0){
                $_SESSION['username'] = $username;
                echo "<script>window.open('./home.php', '_self')</script>";
              }else{
                echo "<script>alert('Invalid Username or Password');</script>";
              }
          }
        }

        ?>

      <p>Don't have an account ? <a href="./userSignup.php">Sign Up</a></p>
    </div>

    <script>
      let passInput =document.getElementById('password');
      let pass =document.getElementById('passEye');
      console.log(passInput); 
      function showPassword() {
        if(passInput.type === "password"){
          passInput.type = 'text';
          console.log(passInput);
        }else{
          passInput.type = 'password';
        }
      }
    </script>
</body>
</html>