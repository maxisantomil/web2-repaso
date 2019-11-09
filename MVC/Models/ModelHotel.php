<?php

class ModelHotel{

    private $db;
    
    function __construct(){
    $this->db =new PDO('mysql:host=localhost;'.'dbname=turismo_argentina;charset=utf8', 'root', '');
    
    }

    public function GetHoteles(){
        $datos= $this->db->prepare('SELECT*FROM hotel');
        $ok =$datos->execute();
        if (!$ok) {var_dump($datos->errorinfo()); die;}
        $hoteles= $datos->fetchAll(PDO::FETCH_OBJ);

        return $hoteles;
    }

    public function InsertarHotel($nombre,$telefono,$direccion,$precio,$ocupado,$id_destino){
        $sentencia= $this->db->prepare("INSERT INTO hotel(nombre,telefono,direccion,precio,id_destino,ocupado) VALUES(?,?,?,?,?,?)");
        $resultado=$sentencia->execute(array($nombre,$telefono,$direccion,$precio,$id_destino,$ocupado));
    }

    public function FinalizarHotel($id){
        $sentencia= $this->db->prepare("UPDATE hotel SET ocupado=1 WHERE id_hotel=?");
        $sentencia->execute(array($id));
    }

    public function BorrarHotel($id){
        $sentencia= $this->db->prepare("DELETE FROM hotel WHERE id_hotel=?");
        $sentencia->execute(array($id));
    }

    public function InicializarHotel($id){
        $sentencia= $this->db->prepare("UPDATE hotel SET ocupado=0 WHERE id_hotel=?");
        $sentencia->execute(array($id));
    }

    public function ModificarHotel($id,$nombre,$telefono,$direccion,$precio,$idDestino,$ocupado){
        $sentencia= $this->db->prepare("UPDATE hotel SET nombre=?,telefono=?,direccion=?,precio=?,id_destino=?,ocupado=? WHERE id_hotel=?");
        $sentencia->execute(array($nombre,$telefono,$diereccion,$precio,$idDestino,$ocupado,$id));
        
    }

    public function HotelesdeunDestino($id){
        $sentencia= $this->db->prepare("SELECT*FROM hotel WHERE id_destino=?");
        $sentencia->execute(array($id));
        $hoteles=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $hoteles;
    }

}




?>