<?php

    include('controller_alumno.php');
    $alumnoDAO = new AlumnoDAO();

    if($alumnoDAO->editarAlumno($_POST['caja_nc'],$_POST['caja_nombre'],$_POST['caja_primerAp'],$_POST['caja_segundoAp'],$_POST['caja_edad'],$_POST['caja_semestre'],$_POST['caja_carrera'])){
        header('location: ../pages/bajas_cambios.php');
    }else{
        echo ":C";
    }
    

?>