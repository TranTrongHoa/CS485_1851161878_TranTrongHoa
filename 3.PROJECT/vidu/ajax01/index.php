<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>123</title>
    <!--Bootstraps-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <input type="button" name="btn" id="btn" value="Click vào"><p>Xin chào mọi người!</p>

<!-- PHP kết nối với config.php-->
<?php include "config.php";
?>
    <!--Dropdown -->
<div>Departments </div>
    <select id="sel_depart">
        <option value="0">- Select -</option>

<!-- PHP đưa dữ liệu sql ra -->
<?php
   // Fetch Department
   $sql_department = "SELECT * FROM department";
   $department_data = mysqli_query($con,$sql_department);
   while($row = mysqli_fetch_assoc($department_data) ){
      $departid = $row['id'];
      $depart_name = $row['depart_name'];
      
      // Option
      echo "<option value='".$depart_id."' >".$depart_name."</option>";
   }
?>
    </select>
        <div class="clear"></div>

<div>Users </div>
    <select id="sel_user">
        <option value="0">- Select -</option>
    </select>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./jquery_ajax.js"></script>
</body>
</html>