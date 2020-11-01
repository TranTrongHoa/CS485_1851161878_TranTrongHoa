<?php
    $conn=mysqli_connect('localhost', 'root','','kiemtragiuaki');
    if($conn){
        mysqli_query($conn, "SET NAME 'utf8' ");
    }
    else
        die('ket noi that bai');
?>