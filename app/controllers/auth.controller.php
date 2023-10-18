<?php
include_once './app/views/auth.view.php';
include_once './app/models/user.model.php';
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
        if($user && $user->password == md5($password)){
            echo 'logueado';

        }else 
        echo 'no existe';
    }
}