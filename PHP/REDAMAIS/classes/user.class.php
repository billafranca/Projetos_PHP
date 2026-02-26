<?php

class Usuario{

    private $pdo;
    private $id;
    private $nome;
    private $email;
    private $senha;

    public function conectar(){
        try{
            $dns = "mysql:dbname=db_login;host=localhost;charset=utf8";
            $user = "root";
            $pass = "";

            $this->pdo = new PDO($dns, $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return true;

        }catch(PDOException $e){
            echo "Erro na conexão: ".$e->getMessage();
            return false;
        }
    }

    public function login($email, $senha){

        $sql = "SELECT * FROM usuarios WHERE email = :e";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":e", $email);
        $stmt->execute();

        if($stmt->rowCount() > 0){

            $dados = $stmt->fetch();

            if(password_verify($senha, $dados['senha'])){
                return $dados;
            }
        }

        return false;
    }

}