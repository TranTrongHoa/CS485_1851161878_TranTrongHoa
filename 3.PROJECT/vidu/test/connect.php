<?php
    $conn=mysqli_connect('localhost', 'root','','bt_test');
    if($conn){
        mysqli_query($conn, "SET NAME 'utf8' ");
    }
    else
        die('ket noi that bai');
?>