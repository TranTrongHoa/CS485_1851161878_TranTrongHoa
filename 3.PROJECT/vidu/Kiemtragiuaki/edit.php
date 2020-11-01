<?php
require_once('connect.php');
if (isset($_POST['monhoc']))
    $ma_mon=$_POST['txtMamon'];
    $ten_mon=$_POST['txtTenmon'];
    $mo_ta=$_POST['txtMota'];
$sql = "UPDATE `monhoc` 
SET txtMamon='$ma_mon', txtTenmon='$ten_mon', txtMota='$mo_ta'";

if ($conn->query($sql) === TRUE) {
    echo "Sửa thông tin thành công";

    } else {
    echo "Sửa thất bại" . $conn->error;
    }
    ?>