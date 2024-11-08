<?php

    include('controller_alumno.php');



    $alumnoDAO = new AlumnoDAO();

    if($alumnoDAO->eliminarAlumno($_GET['nc'])){
        header('location: ../pages/consultas_alumnos.php');
    }else{
        echo ":C";
    }
    

?>