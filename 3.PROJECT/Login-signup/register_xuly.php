<?php
require_once('connect.php');
$errors = array();
    $username=$_POST['txtUserName'];
    $email=$_POST['txtEmail'];
    $password1=$_POST['txtPassword'];
    $password2=$_POST['txtPassword2'];
    if (!empty($password1)) {
		if ($password1 !== $password2) { //#4
			$errors[] = 'Your two password did not match.';
		} 
	} else {
		$errors[] = 'You forgot to enter your password.';
	}
    $password_hash = password_hash($password1, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username,email,password,created_at)
    VALUES ('$username', '$email', '$password_hash', NOW())";
    
  if (mysqli_query($conn, $sql)) {
    header('location:index.php');
} else {
    echo "Không thể thêm  " . $sql . "<br>" . mysqli_error($conn);
}
?>