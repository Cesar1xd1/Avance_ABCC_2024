<?php

    include_once('../database/conexion_bd_escuela.php');

    $con = new ConexionBDEscuela();
    $conexion = $con->getConexion();
    //reci la peticion con JSON a traves de HTTP
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $cadenaJSON = file_get_contents('php://input');
        if($cadenaJSON == false){
            echo "No hay cadena JSON";
        }else{
            //recibir la peticion con JSON a traves de HTTP
            $datos_alumno = json_decode($cadenaJSON,true);
            $nc = $datos_alumno['nc'];

            $sql = "DELETE FROM Alumnos WHERE Num_Control = '$nc';";
            $res = mysqli_query($conexion,$sql);
            
            //configurar RESPUESTA JSON (RESPONSE)
            $respuesta = array();
            if($res){
                $respuesta['delete'] = 'exito';
            }else{
                $respuesta['delete'] = 'fracaso';
            }
            $respuestaJSON = json_encode($respuesta);
            echo $respuestaJSON;

        }

    }

    

?>