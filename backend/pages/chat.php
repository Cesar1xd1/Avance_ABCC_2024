<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>


.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
  text-align: right;
  
}

.container::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>
<?php
        require_once('menu_principal.php');
    ?>
    <?php
    include_once('../controllers/controller_chat.php');


    $chat = new ChatDAO();
    $datos = $chat->mostrarChat("x");

    echo '<strong></strong>';
    if(mysqli_num_rows($datos)>0){
        while($fila = mysqli_fetch_assoc($datos)){
            if(strcmp( $fila['p1'], $_SESSION['usuario']) === 0){
                echo '<div class="container ">';
                
            }else{
                echo '<div class="container darker">'; 
            }
            echo '<strong>'.$fila['p1'].'</strong>';
            echo '<p>'.$fila['mensaje'].'</p>';
            echo '</div>';
        }
        
    }
    ?>



</body>
</html>