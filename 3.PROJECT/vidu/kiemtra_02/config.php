<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "1851161878";

$conn = mysqli_connect($host, $user, $password,$dbname);
// Kiểm tra kết nối
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
