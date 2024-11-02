<?php

    include('controller_alumno.php');



    $alumnoDAO = new AlumnoDAO();

    if($alumnoDAO->eliminarAlumno($_GET['nc'])){
        header('location: ../pages/bajas_cambios.php');
    }else{
        echo ":C";
    }
    

?>