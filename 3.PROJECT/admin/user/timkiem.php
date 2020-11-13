<?php
    require_once('connect.php');
    if(isset($_GET['search-email']) && !empty($_GET['search-email'])){
        $keyword=$_GET['search-email'];
        $sql="SELECT * FROM users WHERE email LIKE '%$keyword%' OR username LIKE '%$keyword%'";
    }
    else{
        $sql="SELECT * FROM users";
    }
    $result=mysqli_query($conn,$sql);
    if(!$result){
        die("Câu truy vấn sai");
    }
?>