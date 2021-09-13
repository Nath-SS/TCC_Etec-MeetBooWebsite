<?php

    require_once 'global.php';

    try{
        header("Location: index.php");
        $usuario = new Usuario();
        $usuario->setNomeUsuario($_POST['txtCName']);
        $usuario->setEmailUsuario($_POST['txtCEmail']);
        $usuario->setSenhaUsuario($_POST['txtCSenha']);
        echo $usuario->cadastrar($usuario);

    }
    catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '<pre>';
        echo $e->getMessage();

    }

?>