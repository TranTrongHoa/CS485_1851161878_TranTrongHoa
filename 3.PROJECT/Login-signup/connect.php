<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "cse485";

$conn = mysqli_connect($host, $user, $password,$dbname);
// Kiểm tra kết nối
if (!$conn) {
  die("Kết nối thất bại :" . mysqli_connect_error());
}
?>
