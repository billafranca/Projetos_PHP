<?php
class Usuario{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;



    private function getId(){
        return $this->id;
    }
    private function getNome(){
        return $this->nome;
    }
    private function getEmail(){
        return $this->email;
    }
    private function getSenha(){
        return $this->senha;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setEmail($email){
        $this->email = $nome;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function checkUser($email){
        $sql = "SELECT * FROM usuarios WHERE email = :e";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":e", $email);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }

    public function checkPass($email, $senha){
        $sql = "SELECT * FROM usuarios WHERE email = :e AND senha = :s";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":e", $email);
        $stmt->bindValue(":s", $senha);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }

    public function conection(){
        try{
            $dns = "mysql:dbname=login;host=localhost";
            $user = "root";
            $pass = "";

            $this->pdo = new PDO($dns, $user, $pass);
            return true;
        }  catch(PDOException $e){
            return false;
        }
    }
    public class inserUser($user, $email, $senha){

        $sql = "INSERT INTO usuarios SET nome = :n email = :e senha = :s";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(":n", $nome);
        $stmt->bindValue(":e", $email);
        $stmt->bindValue(":s", $senha);

        return $stmt->execute();
    }


}
?>