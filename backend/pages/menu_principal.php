<?php
    session_start();   

    if(!$_SESSION['valida']==true){
        header('location: login.php');
    }
    



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="menu_principal.php"><i style="font-size: 30px;" class="bi bi-house-fill" height="500"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link " href="./formulario_altas.php">Agregar </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./bajas_cambios.php">Eliminar/Modificar</a>
                </li>
                <!--
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
-->
            </ul>
            <form class="form-inline my-2 my-lg-0" action="../controllers/cerrar_sesion.php" method="POST">
            <!--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
                <h3>Bienvenido <?php 
                    
                    echo $_SESSION['usuario']. "!";
                    
                ?></h3>
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Log out</button>
            </form>
        </div>
    </nav>
</body>

</html>