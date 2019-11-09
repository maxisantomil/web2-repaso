<?php
    require_once "MVC/Controllers/ControllerDestino.php";
    require_once "MVC/Controllers/ControllerUser.php";
    require_once "MVC/Controllers/ControllerRegistro.php";
    require_once "MVC/Controllers/ControllerInicio.php";
    require_once "MVC/Controllers/ControllerHotel.php";

    $action = $_GET["action"];
    define("BASE", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/hoteles');
    define("URL_IDDESTINO", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/mostrardestino');
    define("URL_HOTELESDESTINO", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/mostrarHoteles');
    define("URL_DESTINO", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/destinos');
    define("URL_LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("URL_LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');
    define("URL_IR", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/iniciarRegistro');
    define("URL_VISITAHOTELES", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/hotelesVisita');
    $controller = new ControllerDestino();
    $controllerUser = new ControllerUser();
    $controllerInicio = new ControllerInicio();
    if($action == ''){
        $controllerInicio->getInicio();
    
    }else{
        if (isset($action)){
            $partesURL = explode("/", $action);
            
            if($partesURL[0]=="registro"){
                $controllerInicio= new ControllerInicio();
                $controllerInicio->getInicio();
            }
            if($partesURL[0] == "destinos"){
            $controller-> getDestino();
            }
            else if($partesURL[0] == "iddestino"){
                $controller->getIdDestino($partesURL[1]);
            }
            else if($partesURL[0] == "insertar"){
                $controller->InsertarDestino();

            }elseif($partesURL[0] == "borrarDestino") {
                $controller->BorrarDestino($partesURL[1]);

            }
            elseif($partesURL[0]=="mostrarHoteles"){
                $controllerHotel=new controllerHotel();
                $controllerHotel->HotelesdeunDestino($partesURL[1]);
            }
            elseif($partesURL[0] == "editarHotel") {
                $controllerHotel=new controllerHotel();
                $controllerHotel->ModificarHotel();
            }
            elseif($partesURL[0]=="editarTabla"){
                $controller->ModificarItem();
            }
            
            elseif($partesURL[0] == "login") {
                $controllerUser->Login();

            }elseif($partesURL[0] == "iniciarSesion") {
                var_dump("login");
                $controllerUser->IniciarSesion();
            }
            elseif($partesURL[0] == "logout") {
                $controllerUser = new ControllerUser();
                $controllerUser->Logout();
            }
            elseif($partesURL[0]== "iniciarRegistro"){
                $controllerRegistro= new ControllerRegistro();
                $controllerRegistro->registrar();
            }
            elseif($partesURL[0]=="datosUser"){
                $controllerRegistro= new ControllerRegistro();
                $controllerRegistro->ingresarDatos();
            }
            elseif($partesURL[0]=="iniciarVisita"){
                $controllerInicio= new ControllerInicio();
                $controllerInicio->getVisita();
            }
            elseif($partesURL[0]=="hotelesVisita"){
                $controllerInicio= new ControllerInicio();
                $controllerInicio->getVisitaHoteles();
            }
            elseif($partesURL[0]=="hoteles"){
                $controllerHotel= new ControllerHotel();
                $controllerHotel->GetHoteles();  
            }
            elseif($partesURL[0]=="insertarHotel"){
                $controllerHotel= new ControllerHotel();
                $controllerHotel->InsertarHotel();
               
            }
            elseif($partesURL[0]=="finalizar"){
                $controllerHotel= new ControllerHotel();
                $controllerHotel->FinalizarHotel($partesURL[1]);
            }
            elseif($partesURL[0]=="borrarHotel"){
                $controllerHotel= new ControllerHotel();
                $controllerHotel->BorrarHotel($partesURL[1]);
                
            }
            elseif($partesURL[0]=="inicializar"){
                $controllerHotel= new ControllerHotel();
                $controllerHotel->InicializarHotel($partesURL[1]);
            }
    }
}
?>