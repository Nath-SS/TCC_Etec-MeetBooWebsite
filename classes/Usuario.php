<?php


class Usuario{

    private $idUsuario;
    private $nomeUsuario;
    private $emailUsuario;
    private $senhaUsuario;

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function getNomeUsuario(){
        return $this->nomeUsuario;
    }

    public function getEmailUsuario(){
        return $this->emailUsuario;
    }

    public function getSenhaUsuario(){
        return $this->senhaUsuario;
    }


    public function setIdUsuario($id){
        $this->idUsuario = $id;
    }

    public function setNomeUsuario($nome){
        $this->nomeUsuario = $nome;
    }

    public function setEmailUsuario($email){
        $this->emailUsuario = $email;
    }

    public function setSenhaUsuario($senha){
        $this->senhaUsuario = $senha;
    }



    public function cadastrar($usuario){
        $conexao = Conexao::pegarConexao();

        $stmt = $conexao->prepare("INSERT INTO tbUsuario (nomeUsuario, emailUsuario, senhaUsuario)
                                    VALUES (?, ?, ?) ");

        $stmt->bindParam(1, $usuario->getNomeUsuario());
        $stmt->bindParam(2, $usuario->getEmailUsuario());
        $stmt->bindParam(3, $usuario->getSenhaUsuario());
        $stmt->execute();

        return 'Cadastro concluido com sucesso';

    }

    public function logar($login, $senha){
        $conexao = Conexao::pegarConexao();

        $stmt = $conexao->prepare("SELECT * FROM tbUsuario WHERE emailUsuario = ? and senhaUsuario = ?");


        $stmt->bindParam(1, $login);
        $stmt->bindParam(2, $senha);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $dado = $stmt->fetch();

            $_SESSION['User'] = $dado['idUsuario'];

            return true;
        }else{
            return false;
        }

    }





        /* cadastro bagunçado
        $queryInsert = "INSERT INTO tbUsuario (nomeUsuario, emailUsuario, senhaUsuario)
                            VALUES (' ". $usuario->getNomeUsuario(). " ',
                                    ' ". $usuario->getEmailUsuario() ." ',
                                    ' ". $usuario->getSenhaUsuario() ." ')                   
         
                                    ";
        //return $queryInsert;
        $conexao->exec($queryInsert);
        return 'Cadastro realizado com sucesso';
        */
        
    }

?>