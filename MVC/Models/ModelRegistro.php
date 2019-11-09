<?php
class ModelRegistro{
    private $db;
    
    function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=turismo_argentina;charset=utf8', 'root', '');
    
    }
    public function insertarDatos($email,$pass){
        $password=password_hash($pass, PASSWORD_DEFAULT);
        $sentencia = $this->db->prepare( "INSERT INTO usuario(email,password) VALUES(?,?)");
        $sentencia->execute(array($email,$password));
        
    }
}
?>