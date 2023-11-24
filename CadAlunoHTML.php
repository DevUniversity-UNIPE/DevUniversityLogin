<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <title>Registro</title>

</head>

<body>
     <?php
        session_start();
        if (!isset($_SESSION["email"])) {
            header("Location: login.php");
            exit();
        }
    ?>
    <div class="logoImg">
        <div class="LeftCont">
            <img src="./image/logoU1.png" class="Logo">
        </div>
    </div>
    <div class="container">
        <div class="FormCont">
            <p class="logoName">Dev University</p>
            <form action="CadAlunoPHP.php" method="post">
                <div class="inputPlaceholder">
                    <input type="text" placeholder="Nome do Aluno:" name="nome">
                    <input type="text" placeholder="Matricula:" name="matricula">
                    <input type="text" placeholder="1ª Nota" name="nota1">
                    <input type="text" placeholder="2ª Nota:" name="nota2">
                    <div>
                        <button type="submit" class="SubmitButton">Cadastrar!</button><br>
                    </div>
                </div>
            </form>
            <form action="TabelaNotas.php" method="get">
                <button type="submit" class="TabNotasBtn"> Voltar </button>
            </form>
        </div>
    </div>
</body>

</html>
