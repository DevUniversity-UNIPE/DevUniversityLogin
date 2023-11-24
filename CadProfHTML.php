<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="script.js" defer></script>
</head>

<body>
    <h1 class="pageTitle animateanimated animatebackInDown">Bem vindo a página de cadastro!</h1>
    <div class="container">
        <div class="LeftCont animateanimated animatebackInLeft">
            <img src="./image/logoU1.png" class="Logo">
        </div>
        <div class="RightCont animateanimated animatebackInRight">
            <div class="FormCont">
                <div class="LogoCont">Dev University</div>
                <form action="CadProfPHP.php" method="post" class="FormContent animateanimated animateheartBeat animate__delay-1s">
                    <input type="email" name="email" id="nome" placeholder="Email" class="inputype formInput">
                    <input type="password" name="senha" id="Password" placeholder="Digite sua senha: " class="inputype formInput">
                    <button type="submit" class="SubmitButton" disabled>Cadastre-se</button>
                </form>
                <div class="warning">Por favor preencha os campos acima</div>
            </div>
            </div>
        </div>
    </div>
</body>


</html>