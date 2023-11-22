<?php
include('conexao.php');

if (empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

mysqli_select_db($conexao, 'register');

$query = "SELECT email, senha FROM users WHERE email = ? AND senha = ?";
$stmt = mysqli_prepare($conexao, $query);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "ss", $email, $senha);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    $rows = mysqli_stmt_num_rows($stmt);

    //fazer redirecionamento para o painel de notas
    
    if ($rows == 1) {
        $_SESSION['email'] = $email;
        header('Location: TabelaNotas.php');
    } else {
        header('Location: index.php');
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Erro na preparação da consulta";
}

mysqli_close($conexao);
?>
