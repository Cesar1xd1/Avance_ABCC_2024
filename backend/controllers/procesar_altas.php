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
    $dcnc = false;
    $dcnombre = false;
    $dcpAp = false;
    $dcsAp = false;
    $dcedad = false;
    $dcsemestre = false;
    $dccarrera = false;
    session_start();

    
    if(!isset($num_control) || empty($num_control) || !is_numeric($num_control) || !ctype_digit($num_control)){
        $dcnc = false;
        $_SESSION['err_nc'] = [empty($num_control),is_numeric($num_control)];     
    }else{
        $dcnc = true;
    } 
    if(!isset($nombre) || empty($nombre) || !preg_match("/^[a-zA-Z\s]+$/", $nombre)){
        $dcnombre = false;
        $_SESSION['err_nombre'] = true;
    }else{
        $dcnombre = true;
    }
    if(!isset($primerAp) || empty($primerAp) || !preg_match("/^[a-zA-Z\s]+$/", $primerAp)){
        $dcpAp = false;
        $_SESSION['err_pAp'] = true;
    }else{
        $dcpAp = true;
    } 
    if(!isset($segundoAp) || empty($segundoAp) || !preg_match("/^[a-zA-Z\s]+$/", $segundoAp)){
        $dcsAp= false;
        $_SESSION['err_sAp'] = true;
    }else{
        $dcsAp = true;
    } 
    if(!isset($edad) || empty($edad) || !is_numeric($edad) || !ctype_digit($edad)){
        $dcedad= false;
        $_SESSION['err_edad'] = true;
    }else{
        $dcedad = true;
    } 
    if(!isset($semestre) || empty($semestre) || !is_numeric($semestre) || !ctype_digit($semestre)){
        $dcsemestre = false;
        $_SESSION['err_semestre'] = true;
    }else{
        $dcsemestre = true;
    } 
    if(!isset($carrera) || empty($carrera) || !preg_match("/^[a-zA-Z\s]+$/", $carrera)){
        $dccarrera = false;
        $_SESSION['err_carrera'] = true;
    }else{
        $dccarrera = true;
    }

    if($dcnc==false || $dcnombre==false || $dcpAp==false || $dcsAp==false || $dcedad=false ||$dcsemestre==false ||$dccarrera==false){
        $datos_correctos = false;
    }else{
        $datos_correctos = true;
    }

    //Mandarselos al controlador
    
    if($datos_correctos==true){
        $alumnoDAO = new AlumnoDAO();
        $res = $alumnoDAO->agregarAlumno($num_control,$nombre,$primerAp,$segundoAp,$edad,$semestre,$carrera);
        
        
        if($res==1){
            $_SESSION['insercion_correcta'] = true;
            header('Location: ../pages/formulario_altas.php');
        }else{
            $_SESSION['insercion_correcta'] = false;
            header('Location: ../pages/formulario_altas.php');
            
        }
        }else{
            $_SESSION['error_validacion'] = true;
            $_SESSION['nc'] = $_POST['caja_nc'];
            $_SESSION['nombre'] = $_POST['caja_nombre'];
            $_SESSION['carrera'] = $_POST['caja_carrera'];
            $_SESSION['pAp'] = $_POST['caja_primerAp'];
            $_SESSION['sAp'] = $_POST['caja_segundoAp'];
            $_SESSION['edad'] = $_POST['caja_edad'];
            $_SESSION['semestre'] = $_POST['caja_semestre'];
            header('Location: ../pages/formulario_altas.php');
    }



    /*
    1. obtener informacion de las cajas
    2. validar
    3. Validar existencia
    4. Mandarselos al controlador
    5. Insertar un objeto del modelo ALUMNO

    */

?>