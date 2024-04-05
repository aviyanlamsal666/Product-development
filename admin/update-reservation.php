<?php
include '../connection.php';

if (isset($_GET['submit'])) {
    $a = $_GET['id1'];
    $b = $_GET['name1'];
    $c = $_GET['phone1'];
    $d = $_GET['email1'];
    $e = $_GET['checkin_date1'];
    $f = $_GET['checkout_date1'];
    $g = $_GET['adults1'];
    $h = $_GET['children1'];
    $i = $_GET['message1'];

    $query = "UPDATE reservation SET name='$b', phone='$c', email='$d', checkin_date='$e', checkout_date='$f', adults='$g', children='$h', message='$i' WHERE id='$a'";
    $run = mysqli_query($conn, $query);

    if ($run) {
        header("location:reservation.php");
    } else {
        echo "Update not successful!";
    }
}
?>


