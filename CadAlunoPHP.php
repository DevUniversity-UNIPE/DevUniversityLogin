<?php
include('conexao.php');

$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$primeiraNota = $_POST['nota1'];
$segundaNota = $_POST['nota2'];

$checkMatriculaQuery = "SELECT * FROM register.users WHERE matricula = '$matricula'";
$result = $conexao->query($checkMatriculaQuery);

if ($result->num_rows > 0) {
    echo '<div style="color: red;">Matricula já existe. Por favor, escolha uma matricula diferente.</div>';
    echo '<button onclick="window.location.href=\'TabelaNotas.php\'">Voltar para Tabela</button>';
} else {
    $sql = "INSERT INTO register.users (nome, matricula, nota1, nota2) VALUES ('$nome', '$matricula', '$primeiraNota', '$segundaNota')";

    if ($conexao->query($sql) === TRUE) {
        echo '<script>alert("Aluno CADASTRADO");</script>';
        header("Location: TabelaNotas.php");
    } else {
        echo "Erro no registro: " . $conexao->error;
    }
}

$conexao->close();
?>
