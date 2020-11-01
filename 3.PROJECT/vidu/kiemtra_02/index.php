<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài kiểm tra số 2</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h2 style="text-align:center">Search Employee Data</h2>
<?php
include ('config.php');
?>
    <div></div>
        <select id="getName">
            <option value="0">Chọn tên nhân viên</option>
        <input type="button" name="search" value="Search">
    

    <div class="list-employee">
    <table class="list-course" border=1>
        <tr class="row">
            <td width="50">ID</td>
            <td width="150">Name</td>
            <td width="200">Address</td>
            <td width="20">Gender</td>
            <td width="200">Designation</td>
            <td width="50">Age</td> 
        </tr>


<?php
    $sql="SELECT * FROM `employee_data`";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr></tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['designation'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";}
        ?>
    </table>   
    </div>
</body>
</html>