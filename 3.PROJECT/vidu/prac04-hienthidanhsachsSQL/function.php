<?php
function getAllUsers(){
    global $conn;
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
    $users = mysqli_fetch_all($result);
    return $users;

}
 function deleteUser ($id){
     global $conn;
     $sql = "DELETE FROM users WHERE user id = '$id'";
     if (mysqli_query($conn,$sql))
       return TRUE;
    else
       return FALSE;
 }
 ?>
 