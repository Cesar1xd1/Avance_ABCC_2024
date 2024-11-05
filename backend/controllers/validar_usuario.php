<?php

$usuario = $_POST['caja_usuario'];
$password = $_POST['caja_password'];

//Verificacion de User and Password en BD

include_once('../../database/conexion_bd_usuarios.php');

$con = new ConexionBDUsuarios();
$conexion = $con->getConexion();

if($conexion){
    //$sql = "SELECT * FROM usuarios WHERE Nombre_Usuario = '$usuario' AND Password = '$password';";
    $u_c = sha1($usuario);
    $p_c = sha1($password);

    $sql = "SELECT * FROM usuarios WHERE Nombre_Usuario = '$u_c' AND Password = '$p_c';";
    $res = mysqli_query($conexion,$sql);
    if(mysqli_num_rows($res)==1){
        echo "usuario encontrado";
        session_start();

        echo session_id();

        $_SESSION['valida']= true;
        $_SESSION['usuario'] = $usuario;
        header('location: ../pages/menu_principal.php');
        
    }else{
        echo "No encontado";
    }
}else{
    echo "Error en la conexion";
}





?>