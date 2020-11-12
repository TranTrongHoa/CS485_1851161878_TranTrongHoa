<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="style02.css">
    <!--Fontawesome -->
    <script src="https://kit.fontawesome.com/1534cbf1d9.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="signup">
	<h1 class="signup-heading">Đăng ký</h1>
	<a href="#" class="signup-google">
		<i class="fab fa-google signup-google-icon"></i>
		<span class="signup-google-text">Đăng ký với Google</span>
	</a>
	<div class="signup-or">
		<span class="signup-or-text">Hoặc</span>
	</div>
	
	<form action="register_xuly.php" class="signup-form" method="POST">
		<div class="form-group">
		<label for="" class="form-label">Tên tài khoản</label>
		<input type="text" class="form-control" id="txtUserName" name="txtUserName" placeholder="Eg: Trong Hoa">
    </div>
	<div class="form-group">
		<label for="" class="form-label">Email</label>
		<input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Eg: 1851161878@e.tlu.edu.vn">
    </div>
    <div class="form-group">
            <label for="" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="">
      </div>
      <div class="form-group">
            <label for="">Xác nhận mật khẩu</label>
            <input type="password" class="form-control" name="txtPassword2" id="txtPassword2" placeholder="">
      </div>
	  <div class="form-group">
		  <input type="submit" class="form-submit btn btn-primary" name="txtLogin" id="txtLogin" value="Đăng ký"></input>
	  </div>
		</form>
	<p class="signup-already">Bạn đã có tài khoản ? <a href="login.php" class="signup-already-link" value="Đăng nhập">Đăng nhập</a></p>
</div>
</body>
</html>