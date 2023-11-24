<?php
include('conexao.php');


if (isset($_GET['matricula'])) {
    $matricula = $_GET['matricula'];


    $sql = "DELETE FROM register.users WHERE matricula = $matricula";

    if ($conexao->query($sql) === TRUE) {
        echo "Usuário excluído com sucesso.";
    } else {
        echo "Erro ao excluir usuário: " . $conexao->error;
    }
} else {
    echo "Matricula do usuário não fornecido.";
}


header("Location: TabelaNotas.php");

$conexao->close();
?>
