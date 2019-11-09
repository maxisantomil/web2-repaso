<?php
    require_once "./MVC/Models/ModelDestino.php";
    require_once "./MVC/Views/ViewDestino.php";
    class ControllerDestino{

        private $model;
        private $view;

        function __construct(){
            $this->model=new ModelDestino();
            $this->view=new ViewDestino();
        }

        public function getDestino(){
            $destinos = $this->model->getDestino();
            $this->view->DisplayDestino($destinos);
        }
        public function getIdDestino($id){
            $destino = $this->model->getDestino($id);
            $this->view->DisplayIdDestino($destino);
        }
        

        public function InsertarDestino(){
            

            $this->model->InsertarDestino($_POST['nombre'],$_POST['descripcion'],$_POST['temporada_alta'],$_POST['puntaje']);
        
            header("Location: " . URL_DESTINO);
         }

         public function BorrarDestino($id){
            $this->model->BorrarDestino($id);
            header("Location: " . URL_DESTINO);
         }
         //public function ModificarItem($id, $nombre, $descripcion, $temp,$puntaje) {
          //  if(isset($_GET) && isset($_GET['id_destino']) && isset($_GET['nombre']) && isset($_GET['descripcion'])&& isset($_GET['temporada_alta'])&& isset($_GET['puntaje'])) {
            //    $this->model->ModificarItem($_GET['id_destino'], $_GET['nombre'], $_GET['descripcion'], $_GET['temporada_alta'], $_GET['puntaje']);
              //  header("Location: " . BASE);
           // } 
              //  $destinos = array($id, $nombre, $descripcion, $temp, $puntaje);
              //  $this->view->DisplayDestino($destinos);
           // }
       // }
             
         public function ModificarItem(){
             $destinos =$this->model->ModificarItem($_POST["id_destino"],$_POST["nombre"],$_POST["descripcion"],$_POST["temporada_alta"],$_POST["puntaje"]);
             header("location:" .URL_DESTINO);
            }

            
            

                
            
    
        

        //public function GuardarItem(){

            //$this->model->ModificarItem($_GET['id_destino'],$_GET['nombre'],$_GET['descripcion'],$_GET['temporada_alta'],$_GET['puntaje']);
            //header("location:" .URL_DESTINO);
            
       //}

         

    }
        
