<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);




$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

if (!empty($nome) && !empty($email) && !empty($senha)) {

    $host = 'localhost';
    $username = 'root';
    $senha = '';
    $dbnome = 'db_login';

    $con = new mysqli($host, $username, $senha, $dbnome);

    if ($con->connect_error) {
        die("Erro de conexão: " . $con->connect_error);
    }

    $SELECT_QUERY = "SELECT nome FROM usuarios WHERE nome = ?";
    $INSERT_QUERY = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";

    $stmt_select = $con->prepare($SELECT_QUERY);
    if (!$stmt_select) {
        die("Erro ao preparar SELECT: " . $con->error);
    }

    $stmt_select->bind_param("s", $nome);
    $stmt_select->execute();
    $stmt_select->store_result();

    $rnum = $stmt_select->num_rows;

    if ($rnum == 0) {
        $stmt_select->close();

        $stmt_insert = $con->prepare($INSERT_QUERY);
        if (!$stmt_insert) {
            die("Erro ao preparar INSERT: " . $con->error);
        }

        $stmt_insert->bind_param("ssd", $nome, $email, $senha);
        $stmt_insert->execute();

        echo "boa men";
        $stmt_insert->close();
    } else {
        echo "erro: '$nome' já está registrado!";
        $stmt_select->close();
    }

    $con->close();
} else {
    echo "Preencha todos os campos!";
}
?>