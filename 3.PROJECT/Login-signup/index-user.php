<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tài khoản Kênh14.VN</title>
    <!--Bootstraps 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!--Fontawesome -->
    <script src="https://kit.fontawesome.com/1534cbf1d9.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1>Danh sách tài khoản</h1>
                <a name="" id="" class="btn btn-success float-right" href="register.php" role="button">+ Thêm mới</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên tài khoản</th>
                            <th>Email</th>
                            <th>Vai trò</th>
                            <th>Tạo lúc</th>
                            <th>Sửa thông tin</th>
                            <th>Xóa thông tin</th>
                        </tr>
                    </thead>
                    <?php
                        require_once 'connect.php';
                        require_once 'function.php';
                        $user = getAllUser();
                        foreach ($user as $row) {
                    ?>
                    <tbody>
                            <tr>
                                <td scope="row"><?php echo $row['0'];?></td>
                                <td><?php echo $row['1'];?></td>
                                <td><?php echo $row['2'];?></td>
                                <td><?php echo $row['3'];?></td>
                                <td><?php echo $row['5'];?></td>
                                <td><a href="sua.php?id= <?php echo $row['0'];?>"><i class="fa fa-pencil mr-2"></i></a></td>
                                <td><a href="xoa.php?id= <?php echo $row['0'];?>"><i class="fas fa-trash-alt"></i></a></td>
                            </tr> 
                    <?php
                        }  
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>