<?php


class Post{

    private $idUsuario;
    private $descPost;
    private $tituloPost;
    private $caminhoImagem;
    private $nomeImagem;

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function getDescPost(){
        return $this->descPost;
    }

    public function getTituloPost(){
        return $this->tituloPost;
    }

    public function getCaminhoImagem(){
        return $this->caminhoImagem;
    }

    public function getNomeImagem(){
        return $this->nomeImagem;
    }


    public function setIdUsuario($id){
        $this->idUsuario = $id;
    }

    public function setDescPost($desc){
        $this->descPost = $desc;
    }

    public function setTituloPost($titulo){
        $this->tituloPost = $titulo;
    }

    public function setCaminhoImagem($caminho){
        $this->caminhoImagem = $caminho;
    }
    
    public function setNomeImagem($nome){
        $this->nomeImagem = $nome;
    }

    public function postar($Post){
        $conexao = Conexao::pegarConexao();

        //Pegar nome

        $stmtU = $conexao->prepare("SELECT idUsuario FROM tbUsuario WHERE nomeUsuario = ?")

        $stmtU->bindValue(1, $_SESSION['User'] );
        $stmtU->execute();
        $post->setIdUsuario($stmtU);

        //Postagem

        $stmt = $conexao->prepare(" INSERT INTO tbPost (FK_idUsuario, descPost, tituloPost, caminhoImagem, nomeImagem)
                                    VALUES (?, ?, ?, ?, ?) ");

        $stmt->bindValue(1, $post->getIdUsuario());
        $stmt->bindValue(2, $post->getDescPost());
        $stmt->bindValue(3, $post->getTituloPost());
        $stmt->bindValue(4, $post->getCaminhoImagem());
        $stmt->bindValue(5, $post->getNomeImagem());
        $stmt->execute();

        header("Location: home.php");


    }

    public function listar(){
        $conexao = Conexao::pegarConexao();
        $querySelect = "SELECT nomeUsuario, descPost, tituloPost, caminhoImagem FROM tbPost
                         INNER JOIN tbUsuario ON tbPost.idUsuario = tbUsuario.idUsuario";
        $resultado = $conexao->query($querySelect);
        $listaPost = $resultado->fetchAll();
        return $listaPost;
    }




}




?>