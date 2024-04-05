<?php
include '../connection.php';

if(isset($_GET['id'])) {
    $a = $_GET['id'];
    $query = "DELETE FROM slider_one WHERE id='$a'";
    $run = mysqli_query($conn, $query);

    if($run) {
        header("location: slider1.php");
        exit(); // Make sure to exit to prevent further execution
    }
    else {
        echo "Delete not successful!";
    }
} else {
    echo "Invalid request.";
}
?>