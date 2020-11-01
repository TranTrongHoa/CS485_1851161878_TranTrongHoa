<?php
require_once('connect.php');
    $ma_mon=$_POST['txtMamon'];
    $ten_mon=$_POST['txtTenmon'];
    $mo_ta=$_POST['txtMota'];

    $sql = "INSERT INTO monhoc (ma_mon,ten_mon,mo_ta)
    VALUES ('$ma_mon', '$ten_mon', '$mo_ta')";
    
  if (mysqli_query($conn, $sql)) {
    header('location:index.php');
} else {
    echo "Không thể thêm vì đã trùng  " . $sql . "<br>" . mysqli_error($conn);
}
?>