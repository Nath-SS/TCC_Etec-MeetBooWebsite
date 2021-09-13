<?php

    require_once('global.php');

    $loginEmail = $_POST['txtLEmail'];
    $loginSenha = $_POST['txtLSenha'];


    if(isset($loginEmail) && !empty($loginEmail) || isset($loginSenha) && !empty($loginSenha)){

        $usuario = new Usuario();

        $login = $_POST['txtLEmail'];
        $senha = $_POST['txtLSenha'];

        if($usuario->logar($login, $senha) == true){
            header("Location: home.php");
        }else{
            header("Location: index.php");
        }

    }else{
        header("Location: index.php");
    }


?>
