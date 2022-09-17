<?php
$server='localhost';
$user='root';
$password='';
$database='hikespaces';
$conn=mysqli_connect($server,$user,$password,$database);
if (!$conn) {
  // code...
  die('Could not Connect My Sql:' .mysql_error());
}
 ?>
