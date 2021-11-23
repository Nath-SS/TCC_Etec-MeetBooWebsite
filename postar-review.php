<?php

    require_once 'global.php';

    
    try{
        $post = new Post();
        $post->setDescPost($_POST['txtReview']);
        $post->setTituloPost($_POST['txtTitulo']);
        
        //recebendo imagem

        $post->setNomeImagem($_FILES['ftFile']['name']);
        $arquivo = $_FILES['ftFile']['tmp_name'];

        $post->setCaminhoImagem('img/');

        move_uploaded_file($arquivo,
                            $post->getCaminhoImagem() . $post->getNomeImagem());

        $post->setCaminhoImagem($post->getCaminhoImagem() . $post->getNomeImagem());


        echo $post->postar($post);

    }
    catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '<pre>';
        echo $e->getMessage();

    }

?>