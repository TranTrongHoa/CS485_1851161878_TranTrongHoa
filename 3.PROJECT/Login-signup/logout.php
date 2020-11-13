<?php session_start(); 
 
if (isset($_SESSION['email'])){
    unset($_SESSION['email']);
}
echo "Đăng xuất thành công. <a href='../trangchinh.php'>Về trang chủ</a>";
?>