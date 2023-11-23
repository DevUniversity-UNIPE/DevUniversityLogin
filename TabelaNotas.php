<?php
include('conexao.php');
$sql = "SELECT * FROM register.users;";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Nome</th>
                <th>Matrícula</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Média</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {

        $media = ($row["nota1"] + $row["nota2"]) / 2;


        echo "<tr>
        <td>" . $row["nome"] . "</td>
        <td>" . $row["matricula"] . "</td>
        <td>" . $row["nota1"] . "</td>
        <td>" . $row["nota2"] . "</td>
        <td>" . $media . "</td>
        <td><a href='excluir_usuario.php?matricula=" . $row["matricula"] . "'>Excluir</a></td>
                </tr>";
    }

    echo "</table>";
} else {
    echo "0 resultados";
}


$conexao->close();
