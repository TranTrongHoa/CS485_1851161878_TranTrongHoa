<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới</title>
        <!--Bootstraps CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <form action="add.php" method="POST">
    <div class="form-group">
        <h1 style="text-align:center"> Thêm môn học</h1>
    </div>
        <div class="form-group">
         <label for="">Mã môn</label>
            <input type="text" name="txtMamon" value="" id="txtMamon">
        </div>
        <div class="form-group">
        <label for="">Tên môn</label>
            <input type="text" name="txtTenmon" value="" id="txtTenmon">
        </div>

        <div class="form-group">
        <label for="">Mô tả</label>
            <textarea name="txtMota" rows="5" cols="30" id="txtMota"></textarea>
        </div>
        
        <div class="form-group">
            <input type="submit" name="submit" value="Lưu lại">
            <input type="reset" name="reset" value="Reset">
        </div>
    </form>
</body>
</html>