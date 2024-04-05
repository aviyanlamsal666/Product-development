

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up to FunOlympic Games</title>
  <link rel="stylesheet" href="./css/userLogin.css">
  <script src="https://kit.fontawesome.com/07c150b60f.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="logo">
  <a href="./index.php"> <img src="./images/logo.png" alt="logo"></a>
  </div>

    <div class="form-Container">
      <h2>Sign up to FunOlympic Games</h2>
    <form action="" method="POST">
        <div class="form-control">
          <label for="username">Email</label>
          <input type="email" id="email" name="email" >
        </div>
        <div class="form-control">
          <label for="username">Username</label>
          <input type="text" name="username" id="username">
        </div>
        <div class="form-control">
          <label for="sports">Sports Interest</label>
          <select name="sports" id="sports" >
            <option value="">Select Preferred Sports</option>
            <option value="Badminton">Badminton</option>
            <option value="Archery">Archery</option>
            <option value="Boxing">Boxing</option>
            <option value="Cycling">Cycling</option>
            <option value="Volleyball">Volleyball</option>
            <option value="Hockey">Hockey</option>
            <option value="Fencing">Fencing</option>
            <option value="Judo">Judo</option>
            <option value="Table Tennis">Table Tennis</option>
          </select>
        </div>
        <div class="form-control">
          <label for="country">Country</label>
          <input type="text" name="country" id="country">
        </div>
        <div class="form-control">
          <label for="contact">Contact Number</label>
          <input type="number" name="contact" id="contact" min="10">
        </div>
        <div class="form-control">

          <label for="password">Password</label>
          <input type="password" name="password" id="password" > 
          
        </div>
        
        <div class="form-control">
          <label for="cpassword">Confirm Password</label>
          <input type="password" name="cpassword" id="cpassword">
        </div>
        <div class="btn">
        <button type="submit" name="submit">Sign Up</button>
        </div>

        <?php
include('./connection.php');

if (isset($_POST['submit'])) {
  $email = $_POST["email"];
  $username = $_POST['username'];
  $sports = $_POST['sports'];  
  $country = $_POST['country'];
  $contact = $_POST['contact'];

  // Validate user input (not shown here)
  // - Sanitize to prevent SQL injection vulnerabilities (e.g., mysqli_real_escape_string)
  // - Perform basic validation checks (e.g., email format, username length)

  if (empty($username) || empty($email) || empty($sports) || empty($country) || empty($contact) || empty($_POST["password"]) || empty($_POST['cpassword'])) {
    $errorMessage = "Please fill out all fields.";  // Store error message in a variable
  } else if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $_POST["password"])) {
    $errorMessage = "Password do not match the required format.";
  } else if ($_POST["password"] !== $_POST['cpassword']) {
    $errorMessage = "Passwords do not match.";
  } else {
    $password = md5($_POST["password"]);
    // Secure password storage using password_hash
    // $password_hash = password_hash($_POST["password"], PASSWORD_BCRYPT, ['cost' => 12]);

    $query = "INSERT INTO signup(email, country, sports, username, contact, password) VALUES ('$email', '$country', '$sports', '$username', '$contact', '$password')";
    $result = mysqli_query($conn, $query);

    if ($result) {
      echo "<script>alert('Sign Up Successful!')</script>";
      echo "<script>location='userLogin.php'</script>";
    } else {
      $errorMessage = "Error: " . mysqli_error($conn);  // Store database error
    }
  }

  // Display error message (if any) within the form
  if (isset($errorMessage)) {
    echo "<p style='color: red; margin: 12px 18px; padding: 0px 16px; font-size: 18px;'>$errorMessage</p>";
  }
}
?>
      </form> 



      <p>Already have an account ? <a href="userLogin.php">Sign In</a></p>
    </div>
    
    <script>
      let passInput =document.getElementById('password');
      let cpassInput = document.getElementById('cpassword');
      let pass =document.getElementById('passEye');
      let cpass =document.getElementById('cpassEye');
      console.log(passInput); 

      function togglePassword() {
        if(passInput.type === "password"){
          passInput.type = 'text';
          cpassInput.type = 'password';
        }else{
          cpassInput.type = 'password';
          passInput.type = 'password';
        }
      }

      // pass.addEventListener('click', ()=> {
    

      // });
      function toggleCpassword(){
        if(cpassInput.type === 'password'){
          cpassInput.type = 'text';
        }else{
          cpassInput.type = 'password';
        }
      }
    </script>
</body>
</html>