<?php
 require('models/UsersModel,php')
class UserController{
    public function index(){
        $userModel = new UserModel();
        $users = $userModel->getAllUsers();
        include('views/user/index.php');

    }
    public function delete(){

    }
    public function edit(){
        
    }
}