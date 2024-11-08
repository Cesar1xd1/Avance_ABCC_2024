<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <?php
    require_once('menu_principal.php');
    
    ?>
    <div class="container">
        <br>
    <div class='row align-items-start justify-content-center'>
    <div class="card" style="width: 18rem;">
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="280" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
            </svg>
            <div class="card-body">
                <h5 class="card-title">
                    <?php
                    echo ($_GET['nombre']);
                    echo (" " . $_GET['primerAp']);
                    echo (" " . $_GET['segundoAp']);
                    ?>
                </h5>
                <p class="card-text">No. De control:
                    <?php
                    echo ($_GET['nc']);
                    ?>
                </p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Edad: <?php echo ($_GET['edad']);  ?></li>
                <li class="list-group-item">Semestre: <?php echo ($_GET['semestre']);  ?></li>
                <li class="list-group-item">Carrera: <?php echo ($_GET['carrera']);  ?></li>
            </ul>
            <a class="btn btn-primary" href="consultas_alumnos.php">Volver</a>
            
        </div>
        <br>
        
    </div>
    
    </div>
</body>

</html>