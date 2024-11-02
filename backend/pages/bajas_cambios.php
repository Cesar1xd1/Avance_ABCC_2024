<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body>
    <?php
        require_once('menu_principal.php');
    ?>
    <div class="container">
    <h3>Listado de alumnos</h3>
    </div>
    
    <?php
        include_once('../../backend/controllers/controller_alumno.php');
        $alumnoDAO = new AlumnoDAO();
        $datos = $alumnoDAO->mostrarAlumnos('x');
        //var_dump($datos);
        if(mysqli_num_rows($datos)>0){
            echo '<div class="container">';
            echo'<table class="table table-success table-striped">';
            echo'<thead>
                <tr>
                    <th> Num. Control </th>
                    <th> Nombre </th>
                    <th> Primer Ap </th>
                    <th> Segundo Ap </th>
                    <th> Edad </th>
                    <th> Semestre </th>
                    <th> Carrera </th>
                    <th> Acciones </th>
                </tr>
                </thead>';
            
            while($fila = mysqli_fetch_assoc($datos)){
                printf("<tr> <td>".$fila['Num_Control']."</td>
                <td>".$fila['Nombre']."</td>
                <td>".$fila['Primer_Ap']."</td>
                <td>".$fila['Segundo_Ap']."</td>
                <td>".$fila['Edad']."</td>
                <td>".$fila['Semestre']."</td>
                <td>".$fila['Carrera']."</td>
                <td> 
                <a class='btn btn-primary' href='card_mostrar.php?nc=%s&nombre=%s&primerAp=%s&segundoAp=%s&edad=%d&semestre=%d&carrera=%s'> 
                    <i class='bi bi-eye'></i>
                </a>",$fila['Num_Control'],$fila['Nombre'],$fila['Primer_Ap'],$fila['Segundo_Ap'],$fila['Edad'],$fila['Semestre'],$fila['Carrera']);

                printf("
                <a  class='btn btn-info' href='formulario_editar.php?nc=%s&nombre=%s&primerAp=%s&segundoAp=%s&edad=%d&semestre=%d&carrera=%s'>
                    <i class='bi bi-pencil-square'></i>
                </a>",$fila['Num_Control'],$fila['Nombre'],$fila['Primer_Ap'],$fila['Segundo_Ap'],$fila['Edad'],$fila['Semestre'],$fila['Carrera']);

                printf("
                <a class= 'btn btn-danger' href='../../backend/controllers/procesar_bajas.php?nc=%s'> 
                    <i class='bi bi-trash-fill'></i>
                </a>

                </td>"
                ,$fila['Num_Control']);
            }
            echo '</table> </div>';
        }else{
            echo"Tabla vacia";
        }
    ?>  
    
</body>
</html>