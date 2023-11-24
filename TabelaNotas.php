<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Tabela.css">
</head>

<body>
    <div class="table-container">
        <?php
        session_start();
        if (!isset($_SESSION["email"])) {
            header("Location: login.php");
            exit();
        }
    
        include('conexao.php');
        $sql = "SELECT * FROM register.users;";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {
            echo
            "<table class='custom-table'>
                    <tr>
                        <th class='header-cell'>Nome</th>
                        <th class='header-cell'>Matrícula</th>
                        <th class='header-cell'>Nota 1</th>
                        <th class='header-cell'>Nota 2</th>
                        <th class='header-cell'>Média</th>
                        <th class='header-cell'>Ação</th>
                    </tr>";

            while ($row = $result->fetch_assoc()) {
                $media = ($row["nota1"] + $row["nota2"]) / 2;

                echo "<tr>
                <td class='data-cell'>" . $row["nome"] . "</td>
                <td class='data-cell'>" . $row["matricula"] . "</td>
                <td class='data-cell'>" . $row["nota1"] . "</td>
                <td class='data-cell'>" . $row["nota2"] . "</td>
                <td class='data-cell'>" . $media . "</td>
                <td class='data-cell'><a class='delete-link' href='DELETE.php?matricula=" . $row["matricula"] . "'>Excluir</a></td>
                </tr>";
            }

            echo "</table>";
        } else {
            echo "0 resultados";
        }

        $conexao->close();
        ?>
    </div>
    <div class="Botoes">
    <form action="CadAlunoHTML.php" method="get">
        <button type="submit" class="CadAluno">Cadastrar Aluno</button>
    </form>
    <form action="logout.php" method="post">
        <button type="submit" class="Logout">Finalizar Sessão</button>
    </form> 
    </div>
</body>

</html>

