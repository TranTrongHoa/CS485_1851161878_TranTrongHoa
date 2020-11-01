<?php
    //Kiểm tra lỗi ko nhập tên
    $errors=array();
    $name=$_POST['txtName'];
    if(empty($name)){
        $errors[]='Vui lòng nhập tên';
    }
    $description=$_POST['txtDescription'];
    $gender=$_POST['inlineRadioOptions'];
    $salary=$_POST['txtSalary'];
    $birthday=$_POST['txtBirthday'];
    //Xuất dl vào db
    $sql="INSERT INTO employees(name,description,gender,salary,birthday,created_at)
          VALUES('$name','$description','$gender','$salary','$birthday',NOW())";
          
//Kết nối database
if (empty($errors)){
    $hostname='localhost:3306';
    $username='root';
    $password='';
    $dbname='bt1';
    $conn = mysqli_connect($hostname, $username, $password,$dbname);
    if (!$conn) {
        die('Không thể kết nối: ' . mysqli_error($conn));
        exit();
    }
       echo 'Kết nối thành công';
       mysqli_close($conn);

    }else{
        // Co loi, hien thi lai loi cho nguoi dung biet
        echo "Có lỗi";
    }
?>