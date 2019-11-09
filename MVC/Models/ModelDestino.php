<?php
    class ModelDestino {

        private $db;

        function __construct(){
            $this->db= new PDO('mysql:host=localhost;'.'dbname=turismo_argentina;charset=utf8', 'root', '');
            }

        function getDestino(){
            $sentencia =$this->db->prepare("SELECT * FROM  destino ORDER BY destino.puntaje asc");
            $sentencia->execute();
            $obj = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $obj;
            }
        function getIdDestino($id){
            $sentencia =$this->db->prepare("SELECT  FROM destino WHERE id_destino=?");
            $sentencia->execute(array($id));
            $destino=$sentencia->fetch(PDO::FETCH_OBJ);
            return $destino;
        }

            public function InsertarDestino($nombre,$descripcion,$temporada_alta,$puntaje ){
                $sentencia = $this->db->prepare("INSERT INTO destino(nombre,descripcion,temporada_alta,puntaje) VALUES(?,?,?,?)");
                $sentencia->execute(array($nombre,$descripcion,$temporada_alta,$puntaje ));
            }
            public function BorrarDestino($id){
                $sentencia = $this->db->prepare("DELETE FROM destino WHERE id_destino=?");
                $sentencia->execute(array($id));
        }
        public function ModificarItem($id,$nombre,$descripcion,$temp,$puntaje){
            $sentencia= $this->db->prepare("UPDATE destino SET nombre=?,descripcion=?,temporada_alta=?,puntaje=? WHERE id_destino=?");
            $sentencia->execute(array($nombre,$descripcion,$temp,$puntaje, $id));
            
        }
    }