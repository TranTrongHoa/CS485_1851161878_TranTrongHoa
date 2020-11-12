<?php
require_once('connect.php');
$errors = array();
    $username=$_POST['txtUserName'];
    $email=$_POST['txtEmail'];
    $password1=$_POST['txtPassword'];
    $password2=$_POST['txtPassword2'];
    //Kiểm tra pass
    if (!empty($password1)) {
      if ($password1 !== $password2) { //#4
        $errors[] = 'Your two password did not match.';
      } 
    } else {
      $errors[] = 'You forgot to enter your password.';
    }
//Kiểm tra người dùng đã nhập liệu đầy đủ chưa
if (!$username || !$email || !$password1 || !$password2)
{
    echo "Vui lòng nhập đầy đủ thông tin. <a href='register.php'>Trở lại</a>";
    exit;
}


  if (empty($errors)){
    $password_hash = password_hash($password1, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username,email,password,created_at)
    VALUES ('$username', '$email', '$password_hash', NOW())";
    if (mysqli_query($conn, $sql)) {
      header('location:login.php');}
  else {
    echo "Không thể đăng ký  " . $sql . "<br>" . mysqli_error($conn);}
}
else{
  echo " Có lỗi nhập thông tin vui lòng nhập lại";
}
?>