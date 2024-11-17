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
        
        <form action="procesar_consulta.php" method="post">
            

            <div class="row justify-content-center">
                <div class="col-2">
                <label>Filtro: </label>
                </div>
            
            <div class="col-4">
                <select class="form-control" name="select" id="">
                    <option value="1">No. de Control</option>
                    <option value="2">Nombre</option>
                    <option value="3">Primer Apellido</option>
                    <option value="4">Segundo Apellido</option>
                    <option value="5">Edad</option>
                    <option value="6">Semestre</option>
                    <option value="7">Carrera</option>
                </select>
            </div>
            
                <div class="col-4">
                    <input class="form-control" type="search" name="caja_filtro" >
                </div>
                <div class="col-2 d-grid gap-2">
                    <button class="btn btn-warning my-2 my-sm-0" type="submit">Buscar</button>
                    <form action="procesar_consulta.php" method="post">
                    <button class="btn btn-info my-2 my-sm-0" type="submit">Todos</button>
                    </form>
                </div>
            </div>
        </form>
        <br>
    </div>
    <?php
        require_once('procesar_consulta.php');
    ?>


</body>
</html>