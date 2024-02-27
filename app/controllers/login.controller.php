<?php

require_once './app/models/users.model.php';
require_once './app/views/login.view.php';
require_once 'config.php';

class loginController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new userModel();
        $this->view = new loginView();
    }

    public function showLogin(){
        $this->view->showLogin();
    }

    public function autenticar(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = $this->model->getUser($username);
        
        //TENGO QUE ENCRIPTAR LAS PSW
        if($password=$user->password){
            $_SESSION['logueado'] = $user;
            echo $_SESSION;
            header('Location: '.BASE_URL.'/home');
        }else{
            echo "Los datos ingresados no son validos";
            $this->view->showLogin("Los datos ingresados no son validos");
        }

    }

    public function logout(){
        session_destroy();
        header('Location: '.BASE_URL);
    }
}