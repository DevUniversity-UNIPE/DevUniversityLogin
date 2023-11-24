<?php
include('conexao.php');

$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$primeiraNota = $_POST['nota1'];
$segundaNota = $_POST['nota2'];


$sql = "INSERT INTO register.users (nome, matricula, nota1, nota2) VALUES ('$nome', '$matricula', '$primeiraNota', '$segundaNota')";

if ($conexao->query($sql) === TRUE) {
    echo "Registro realizado com sucesso!";
} else {
    echo "Erro no registro: " . $conexao->error;
}


$conexao->close();
?>
