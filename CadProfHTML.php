<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CadProf.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
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
        <div class="FormCont">
            <p class="welcomeTxt"> Welcome to </p> 
            <p class="logoName">Dev University</p>
            <div class="inputPlaceholder">
                <form action="CadProfPHP.php" method="post">
                    <input type="email" placeholder="Digite seu email" name="email" class="inputype"><br>
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha:" class="inputype"><br>
                    <div class="DivSubmitBtn">
                        <button type="submit" class= "SubmitBtn">Cadastrar</button>
                    </div>
                </form>
                <form action="index.php" method="get">
                    <button type="submit" class="indexBtn"> Voltar </button>
                </form>
            <div>
        </div>
    </div>
</body>


</html>