<?php
class Database{
private $host = 'localhost';
private $user = 'admin';
private $pass = 'abcabc';
private $db = 'Ch01';
private $port = '3306';
public function openConnection(){
$conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
if(!$conn){
die("Khong the ket noi");
}
return $conn;
}
public function closeConnection($conn){
mysqli_close($conn);
}
}
class User extends Database{
// Properties
private $userID;
private $firstName;
private $lastName;
private $email;
private $password;
private $activation_code;
private $status;
private $connection;
// Method
public function __construct(){
$this->connection = $this->openConnection();
}
public function getAllUsers(){
$sql = "SELECT * FROM users";
$result = mysqli_query($this->connection, $sql);
$users = mysqli_fetch_all($result);
return $users;
}
}
?>
