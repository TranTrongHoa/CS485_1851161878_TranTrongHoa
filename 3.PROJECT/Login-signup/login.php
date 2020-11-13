<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="style02.css">
        <!--Fontawesome -->
    <script src="https://kit.fontawesome.com/1534cbf1d9.js" crossorigin="anonymous"></script>

</head>
<body>
	<div class="signup">
			<h1 class="signup-heading">Đăng nhập</h1>
		<a href="#" class="signup-google">
			<i class="fab fa-google signup-google-icon"></i>
			<span class="signup-google-text">Đăng nhập với Google</span>
		</a>
		<div class="signup-or">
			<span class="signup-or-text">Hoặc</span>
		</div>
	
	<form action="login-xuly.php" class="signup-form" method="POST">
		<div class="form-group">
			<label for="" class="form-label">Email</label>
			<input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="">
    	</div>
    	<div class="form-group">
        	<label for="" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="">
      	</div>
      	<div class="form-group">
			<input type="submit" class="form-submit btn btn-primary" name="txtLogin" id="txtLogin" value="Đăng nhập"></input>
	  	</div>
	</form>
		<p class="signup-already">Bạn chưa có tài khoản ?<a href="register.php" class="signup-already-link"> Đăng ký</a></p>
</body>
</html>