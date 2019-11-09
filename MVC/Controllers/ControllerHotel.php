<?php
require_once "./MVC/Models/ModelHotel.php";
require_once "./MVC/Views/ViewHotel.php";

class ControllerHotel{

    private $modelHotel;
    private $viewHotel;

    function __construct(){
        
        $this->modelHotel = new ModelHotel();
        $this->viewHotel = new ViewHotel();
    }

    public function GetHoteles(){
        $hoteles= $this->modelHotel->GetHoteles();
        $this->viewHotel->DisplayHoteles($hoteles);

    }
    public function InsertarHotel(){
        $ocupado=0;
        if($_POST['ocupado'] == 'on'){
            $ocupado=1;
        }
        $this->modelHotel->InsertarHotel($_POST["nombre"],$_POST["telefono"],$_POST["direccion"],$_POST["precio"],$ocupado,$_POST["id_destino"]);

        header("Location:" .BASE_URL);
    
    }
    public function ModificarHotel(){
        $ocupado=0;
        $id=$_POST["id_hotel"];
        $nombre=$_POST["nombre"];
        $telefono=$_POST["telefono"];
        $direccion=$_POST["direccion"];
        $precio=$_POST["precio"];
        $idDestino=$_POST["id_destino"];
        $hotel=$this->modelHotel->ModificarHotel($id,$nombre,$telefono,$direccion,$precio,$idDestino,$ocupado);
        header("location:" .BASE_URL);
       }
    public function FinalizarHotel($id){
        
        $this->modelHotel->FinalizarHotel($id);
        header("location:" .BASE_URL);
    }

    public function BorrarHotel($id){
        $this->modelHotel->BorrarHotel($id);
        header("location:" .BASE_URL);
    }
    public function InicializarHotel($id){
        $this->modelHotel->InicializarHotel($id);
        header("location:" .BASE_URL);
    }
    public function HotelesdeunDestino($id){
        $hoteles=$this->modelHotel->HotelesdeunDestino($id);
        $this->viewHotel->DisplayHotelesdeDestino($hoteles);

    }
    
}
?>