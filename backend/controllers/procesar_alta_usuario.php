<?php
    include('controller_usuario.php');
    $u = $_POST['caja_usuario'];
    $p = $_POST['caja_password'];


    $datos_correctos = false;
    if(isset($u) || isset($p) && !empty($u) || !empty($p)){
        $datos_correctos = true;
    }

    if($datos_correctos){
        $usuarioDAO = new UsuarioDAO();
        $datos = $usuarioDAO->buscarUsuario($u,$p);
        if(mysqli_num_rows($datos)==0){
            $res = $usuarioDAO->registrarUsuario($u,$p);
            if($res){
                header('location: ../pages/login.php');
            }else{
                echo 'No se pudo registrar';
            }
        }else{
            echo 'Usuario existente';
        }

    }

?>