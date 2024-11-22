<?php
include('../../database/conexion_bd_escuela.php');
    class ChatDAO{
        private $conexion;

        public function __CONSTRUCT(){
            $this->conexion = new ConexionBDEscuela(); 
        }

        // ---- metodos abcc ----

        //Altas
        public function agregarChat($p1,$p2,$mensaje){
            $sql = "INSERT INTO chat VALUES('$p1','$p2','$mensaje')";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }

        //Consultas
        public function mostrarChat($filtro){
            $sql = "SELECT * FROM chat";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }

    }
?>