<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <title>Registro</title>

</head>

<body>
    <div class="logoImg">
        <div class="LeftCont">
            <img src="./image/logoU1.png" class="Logo">
        </div>
    </div>
    <div class="container">
        <div class="FormCont">
            <p class="welcomeMessage"> Welcome to </p>
            <p class="logoName">Dev University</p>
            <form action="cadastrar.php" method="post">
                <div class="inputPlaceholder">
                    <input type="text" placeholder="Nome do Aluno:" name="Nome">
                    <input type="text" placeholder="Matricula:" name="Senha">
                    <input type="text" placeholder="1ª Nota" name="PrimeiraNota">
                    <input type="text" placeholder="2ª Nota:" name="SegundaNota">
                    <div>
                        <button type="submit" class="SubmitButton">Cadastrar!</button><br>
            </form>
        </div>
    </div>
</body>

</html>