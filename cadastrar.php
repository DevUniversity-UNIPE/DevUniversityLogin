<?php
include('conexao.php');

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($conexao, $email);

    $senha = $_POST['senha'];
    $senha = mysqli_real_escape_string($conexao, $senha);

    // Verifica se o e-mail já está cadastrado
    $sql_check_email = "SELECT email FROM register.emailsenha WHERE email = ?";
    $stmt_check_email = mysqli_prepare($conexao, $sql_check_email);

    if ($stmt_check_email) {
        mysqli_stmt_bind_param($stmt_check_email, "s", $email);
        mysqli_stmt_execute($stmt_check_email);
        mysqli_stmt_store_result($stmt_check_email);

        if (mysqli_stmt_num_rows($stmt_check_email) > 0) {
            // E-mail já cadastrado, exiba uma mensagem de erro
            echo "E-MAIL JÁ CADASTRADO!";
            mysqli_stmt_close($stmt_check_email);
            mysqli_close($conexao);
            exit();
        }

        mysqli_stmt_close($stmt_check_email);
    } else {
        // Erro na preparação da consulta, exiba uma mensagem de erro
        die("Erro na verificação de e-mail: " . mysqli_error($conexao));
    }

    // Insere o novo usuário no banco de dados sem criptografar a senha
    $sql_insert_user = "INSERT INTO register.emailsenha (email, senha) VALUES (?, ?)";
    $stmt_insert_user = mysqli_prepare($conexao, $sql_insert_user);

    if ($stmt_insert_user) {
        mysqli_stmt_bind_param($stmt_insert_user, "ss", $email, $senha);
        mysqli_stmt_execute($stmt_insert_user);

        if (mysqli_stmt_affected_rows($stmt_insert_user) > 0) {
            // Cadastro realizado com sucesso
            echo "CADASTRADO COM SUCESSO";
        } else {
            // Erro ao cadastrar usuário, exiba uma mensagem de erro
            echo "Erro ao cadastrar usuário: " . mysqli_error($conexao);
        }

        mysqli_stmt_close($stmt_insert_user);
    } else {
        // Erro na preparação da consulta, exiba uma mensagem de erro
        die("Erro na preparação da consulta: " . mysqli_error($conexao));
    }

    mysqli_close($conexao);
} else {
    // Dados incompletos, exiba uma mensagem de erro
    echo "Dados incompletos. Por favor, forneça um e-mail e uma senha.";
}
?>
