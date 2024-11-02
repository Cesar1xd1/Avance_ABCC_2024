<?php

    include('controller_alumno.php');
    //Obtener informacion de las cajas
    $num_control = $_POST['caja_nc'];
    $nombre = $_POST['caja_nombre'];
    $primerAp = $_POST['caja_primerAp'];
    $segundoAp = $_POST['caja_segundoAp'];
    $edad = $_POST['caja_edad'];
    $semestre = $_POST['caja_semestre'];
    $carrera = $_POST['caja_carrera'];

    //validar
    $datos_correctos = false;
    if(isset($num_control) && !empty($num_control) && is_numeric($num_control)){
        $datos_correctos = true;
    }

    //Mandarselos al controlador
    if($datos_correctos){
        $alumnoDAO = new AlumnoDAO();

        $res = $alumnoDAO->agregarAlumno($num_control,$nombre,$primerAp,$segundoAp,$edad,$semestre,$carrera);
        if($res){
            
            header('location: ../pages/formulario_altas.php');
        }else{
            echo ":C";
        }
    }



    /*
    1. obtener informacion de las cajas
    2. validar
    3. Validar existencia
    4. Mandarselos al controlador
    5. Insertar un objeto del modelo ALUMNO

    */

?>