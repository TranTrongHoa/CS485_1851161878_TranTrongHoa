<?php
require_once('connect.php');
$errors = array();
$email = $_POST['txtEmail'];
	if (empty($email)) {
		$errors[] = 'You forgot to enter your email address.';
    }
$password = $_POST['txtPassword'];
	if (empty($password)) {	
			$errors[] = 'Your two password did not match.';
    } 
if (empty($errors)){
    $sql = "SELECT * FROM users WHERE email='$email'";
        // echo $sql;
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);
            // print_r($row);
            $password_hash = $row['password'];
            // echo $password_hash;
            if(password_verify($password,$password_hash)){
                echo "Xin chào " . $email . ". Bạn đã đăng nhập thành công. <a href='index-admin.php'>Đến trang quản lý</a>";
                die();
            }else{
                echo "Sai mật khẩu, vui lòng nhập lại";
            }
        }else{
            echo ".....";
        }
}
else{
        echo "Có lỗi khi nhập dữ liệu ...";
    }

?>