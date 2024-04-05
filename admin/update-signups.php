<?php
include '../connection.php';
if(isset($_POST['submit']))
{
  
     $a=$_POST['id'];
     $b=$_POST['email'];
     $c=$_POST['country'];
     $d=$_POST['sports'];
     $e=$_POST['username'];
     $f = $_POST['contact'];
     $g= md5($_POST['password1']);
   //   $e=md5($e);
     $query="UPDATE signup set email='$b', country='$c',sports='$d',username='$e', contact='$f', password='$g' where id='$a'";
     $run=mysqli_query($conn,$query);
     if($run)
     {
        header("location:signUps.php");
     }
     else
     {
        echo "Update not successful!";
     }
   }

?>
<!-- <h2>
    <a href="index.php">Go to home &gt; &gt;</a>
</h2> -->