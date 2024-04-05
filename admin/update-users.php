<?php
include '../connection.php';
if(isset($_POST['submit']))
{
  
     $a=$_POST['id1'];
     $b=$_POST['fname1'];
     $c=$_POST['lname1'];
     $d=$_POST['username1'];
     $e=$_POST['password1'];
   //   $e=md5($e);
     $query="UPDATE users set first_name='$b',last_name='$c',username='$d',password='$e' where id='$a'";
     $run=mysqli_query($conn,$query);
     if($run)
     {
        header("location:users.php");
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