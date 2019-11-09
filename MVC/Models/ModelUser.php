<?php

class ModelUser {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=turismo_argentina;charset=utf8', 'root', '');
    }

    public function GetPassword($user){
        $sentencia = $this->db->prepare( "SELECT * FROM usuario WHERE email = ?");
        $sentencia->execute(array($user));
        
        $password = $sentencia->fetch(PDO::FETCH_OBJ);
        return $password;
    }

    function getUsuarios(){
        $sentencia =$this->db->prepare("SELECT * FROM usuario");
        $sentencia->execute();
        $obj = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $obj;
        }

}
?>
