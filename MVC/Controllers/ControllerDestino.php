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
            $destino = $this->model->getIdDestino($id);
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
             
         public function ModificarItem(){
             $destinos =$this->model->ModificarItem($_POST["id_destino"],$_POST["nombre"],$_POST["descripcion"],$_POST["temporada_alta"],$_POST["puntaje"]);
             header("location:" .URL_DESTINO);
            }

            public function ModificarItemDestino($id){
            $destino = $this->model->getIdDestino($id);
            $this->view->ModificarDestino($destino);
            }


    }
        
