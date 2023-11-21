<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rrgistro</title>
</head>

<body>
    <div class="container">
        <div class="FormCont">
            <p class="logo">Dev University</p>
            <form action="cadastrar.php" method="post">
                <label for="Nome">Digite seu nome:</label>
                <input type="text" placeholder="Nome:" name="Nome">

                <label for="Senha">Digite sua matricula:</label>
                <input type="text" placeholder="Matricula:" name="Senha">

                <label for="PrimeiraNota">Digite a primeira nota do aluno:</label>
                <input type="text" placeholder="1ª Nota" name="PrimeiraNota">


                <label for="SegundaNota">Digite a segunda nota do aluno(a):</label>
                <input type="text" placeholder="2ª Nota:" name="SegundaNota">

                <button type="submit">Cadastrar!</button>
            </form>
        </div>
    </div>
</body>

</html>