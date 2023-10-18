<?php
include_once './app/views/auth.view.php';
include_once './app/models/user.model.php';
include_once './app/helper/auth.helper.php';

class authController{
    private $view;
    private $model;

    public function __construct(){
        $this->view = new authView();
        $this->model = new UserModel();

    }

    public function ShowLogin(){
        $this->view->ShowFormLogin();
    }

    public function VerifyUser(){
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        if (empty($usuario) || empty($password)){
            echo 'error';
        }
        $user = $this->model->getUserByName($usuario);
        if($user && password_verify($password,$user->contrasenia)){
            AuthHelper::login($user);
        header('location: ' . BASE_URL);
        }else 
        echo 'no existe';
    }
    public function Logout(){
        AuthHelper::logout();
        header('location: ' . BASE_URL);
    }
}