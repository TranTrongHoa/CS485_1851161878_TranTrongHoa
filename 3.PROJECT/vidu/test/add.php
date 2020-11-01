<?php
    require_once('connect.php');
    $name=$_POST['username'];
    $about=$_POST['about'];
    $salary=$_POST['salary'];
    $gender=$_POST['inlineRadioOptions'];
    $date=$_POST['date'];
    $sql = "INSERT INTO employees (name,description,gender,salary,birthday)
    VALUES ('$name', '$about', '$gender', '$salary','$date')";
  if (mysqli_query($conn, $sql)) {
    header('location: read.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}
?>