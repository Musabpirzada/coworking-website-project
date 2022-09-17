<?php
include 'connection.php';
$x=$_GET['id'];
$abc="DELETE FROM booking order by booking_id desc limit 1";
$res=mysqli_query($conn,$abc);
echo "<script>alert('Your booking is cancelled')</script>";
header("Location: home.html");

 ?>
