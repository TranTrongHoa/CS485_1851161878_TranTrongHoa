<?php
    require 'connect.php';
    require 'function.php';
    $id = $_GET['id'];
    if($delete = deleteRecord($id)){
      header('Location: index-user.php');
      exit();
    }
    else {
      echo "Không thể xóa";
    }
?>