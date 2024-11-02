<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<?php
        require_once('menu_principal.php');
    ?>
    <div class="container">
    <h2>Editar Alumno</h1>
    <form action="../controllers/procesar_cambio.php" method="POST">
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="inputEmail4">Numero de Control</label>
                <?php
                    echo ('<input type="text" class="form-control" id="caja_nc" name="caja_nc" value="'.$_GET["nc"].'" readonly>');
                ?>   
            </div>

            <div class="form-group col-md-6">
                <label for="inputPassword4">Nombre</label>
                <?php
                    echo ('<input type="text" class="form-control" id="caja_nombre" name="caja_nombre" placeholder="Nombre" value="'.$_GET['nombre'].'"> ');
                ?>
            </div>   
        </div>

        <div class="form-group">
            <label for="inputAddress">Primer Apellido</label>
            <?php
                echo ('<input type="text" class="form-control" id="caja_primerAp" 
                name="caja_primerAp" placeholder="Apellido Paterno" value="'.$_GET['primerAp'].'">');
            ?>
        </div>
        
        <div class="form-group">
            <label for="inputAddress2">Segundo Apellido</label>
            <?php
                echo ('<input type="text" class="form-control" id="caja_segundoAp" name="caja_segundoAp" placeholder="Apellido Materno" value="'.$_GET['segundoAp'].'">');
            ?>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Edad</label>
                <?php
                    echo (' <input type="number" class="form-control" id="caja_edad" name="caja_edad" value="'.$_GET['edad'].'">');
                ?>
            </div>

            <div class="form-group col-md-4">
                <label for="inputState">Semestre</label>
                <?php
                    echo ('<input type="number" class="form-control" id="caja_semestre" name="caja_semestre" value="'.$_GET['semestre'].'">');
                ?>
            </div>

            <div class="form-group col-md-4">
                <label for="inputZip">Carrera</label>
                <?php
                    echo ('<input type="text" class="form-control" id="caja_carrera" name="caja_carrera" value="'.$_GET['carrera'].'"');
                ?>
                <input type="text" class="form-control" id="caja_carrera" name="caja_carrera">
            </div>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
        
        
    </form>
    </div>
    
</body>

</html>