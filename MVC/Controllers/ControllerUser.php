<?php
require_once "./MVC/Models/ModelUser.php";
require_once "./MVC/Views/ViewUser.php";

class ControllerUser {

    private $model;
    private $view;

	function __construct(){
        $this->model = new ModelUser();
        $this->view = new ViewUser();
    }
  
    public function IniciarSesion(){
        $password = $_POST['pass'];
        $usuario = $this->model->GetPassword($_POST['user']);
        if ((isset($usuario) && ($usuario != null)) && password_verify($password,$usuario->password)){
            session_start();
            $_SESSION['user'] = $usuario->mail;
            $_SESSION['userId'] = $usuario->id_usuario;
            header("Location: " . URL_DESTINO);
        }else{
            header("Location: " . URL_LOGIN);
          
        }
       // header("Location: " . BASE_URL);

    }
    public function Login(){
        $this->view->DisplayLogin();
    }
    public function Logout(){
        session_start();
        session_destroy();
        header("Location: " . BASE);
    }

    //public function GetView(){
        //$this->view->DisplayDatosUsuario();
       //header("Location:" .URL_IR);
        
    }
    //public function IngresarDatos(){
           // $usuario = $this->model->insertarUsuario($_POST['email'],$_POST['password']);
          
        
     
