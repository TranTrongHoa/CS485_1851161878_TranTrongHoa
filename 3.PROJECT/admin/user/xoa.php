<?php
    require_once('../../Login-signup/connect.php');
    require_once('../../Login-signup/function.php');
    $id = $_GET['id'];
    if($delete = deleteRecord($id)){
      header('Location: index-user.php');
      exit();
    }
    else {
      echo "Không thể xóa";
    }
?>