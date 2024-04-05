<?php
include '../connection.php';
if(isset($_GET['submit']))
{
  
     $a=$_GET['id1'];
     $b=$_GET['date'];
     $c=$_GET['title'];
     $d=$_GET['content'];
     $e=$_GET['image'];
     $e=md5($e);
     $query="update posts set date='$b',title='$c',content='$d',image='$e' where id='$a'";
     $run=mysqli_query($conn,$query);
     if($run)
     {
        header("location:add-post.php");
     }
     else
     {
        echo "Update not successful!";
     }
   }

?>
<h2>
    <a href="index.php">Go to home &gt; &gt;</a>
</h2>