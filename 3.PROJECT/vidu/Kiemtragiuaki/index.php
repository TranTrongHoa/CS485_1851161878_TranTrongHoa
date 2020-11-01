<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Bootstraps CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="form-group">
        <h1 style="text-align:center">DANH SÁCH MÔN HỌC</h1>
    </div>
        <div class="form-group">
         <label for="">Tên môn</label>
            <input type="text" name="txtTimkiem" value="">
            <input type="submit" name="submit" value="Tìm kiếm">
        </div>
    <table border="1">
    <tr>
        <td>Mã môn</td>
        <td>Tên môn</td>
        <td>Mô tả</td>
    </tr>
       
<?php
require 'connect.php';
$conn=mysqli_query($conn,"select * from `monhoc`");
while($row=mysqli_fetch_array($conn)){
?>
<tr>
<td><?php echo $row['ma_mon']; ?></td>
<td><?php echo $row['ten_mon']; ?></td>
<td><?php echo $row['mo_ta']; ?></td>
<td><a href="edit.php?id=<?php echo $row['ma_mon']; ?>">Edit</a></td>
<td><a href="delete.php?id=<?php echo $row['ma_mon']; ?>">Delete</a></td>
</tr>
<?php
}
?>
</table>
</body>

</html>