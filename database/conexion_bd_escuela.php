


<?php
/*
Funciones MySQL
Funciones PDO
    Permiten cambiar la conectividad a diversos gestores de bases de datos
*/


class ConexionBDEscuela{
    private $conexion;
    /*
    //== PRODUCCION ==
    private $host = "sql202.infinityfree.com:3306";
    private $usuario = "if0_37251726";
    private $password = "Cesar1xd1";
    private $bd = "if0_37251726_bd_escuela_web_2024";
    */

    
    //== LOCAL ==
    private $host = "localhost:3306";
    private $usuario = "Cesar1xd1";
    private $password = "1234";
    private $bd = "bd_escuela_web_2024";
    

    public function __construct(){
        $this->conexion = mysqli_connect($this->host,$this->usuario,$this->password,$this->bd);
        if(!$this->conexion){
            die("Error en conexion a BD: " . mysqli_connect_error());
        }
    }

    public function getConexion(){
        return $this->conexion;
    }

}


?>