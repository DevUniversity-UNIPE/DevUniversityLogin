<?php
include('conexao.php');
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($conexao === false) {
    die("Erro de conexão com o banco de dados: " . mysqli_connect_error());
}

$query = "SELECT email, senha FROM register.emailsenha WHERE email = ?";
$stmt = mysqli_prepare($conexao, $query);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) == 1) {
        mysqli_stmt_bind_result($stmt, $db_email, $db_senha_hash);
        mysqli_stmt_fetch($stmt);

        if (password_verify($senha, $db_senha_hash)) {
            // Senha correta, proceda com o login
            $_SESSION['email'] = $email;
            mysqli_stmt_close($stmt);
            mysqli_close($conexao);
            header('Location: TabelaNotas.php');
            exit();
        } else {
            // Senha incorreta, exiba uma mensagem de erro
            echo "Senha incorreta";
        }
    } else {
        // E-mail não encontrado, exiba uma mensagem de erro
        echo "E-mail não encontrado";
    }

    mysqli_stmt_close($stmt);
} else {
    // Erro na preparação da consulta, exiba uma mensagem de erro
    die("Erro na preparação da consulta");
}

mysqli_close($conexao);

// Se chegou aqui, algo deu errado, redirecione para a página de login
exit();
?>
