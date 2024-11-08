<?php
    include('../../database/conexion_bd_usuarios.php');
    class UsuarioDAO{
        private $conexion;

        public function __CONSTRUCT(){
            $this->conexion = new ConexionBDUsuarios(); 
        }

        public function registrarUsuario($u,$p){
            $sql = "INSERT INTO usuarios VALUES (SHA1('$u'), SHA1('$p'));";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }

        public function buscarUsuario($u,$p){
            $sql = "SELECT * FROM usuarios WHERE Nombre_Usuario = SHA1('$u') AND Password = SHA1('$p')" ;
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }


    }


?>