<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="script.js" defer></script>
</head>

<body>
    <div class="container">
        <div class="LeftCont animate__animated animate__backInLeft">
            <img src="./image/logoU1.png" class="Logo">
        </div>
        <div class="RightCont animate__animated animate__backInRight">
            <div class="FormCont">
                <div class="LogoCont">Dev University</div>
                <form action="Login.php" method="post" class="FormContent animate__animated animate__heartBeat animate__delay-1s">
                    <input type="email" name="email" id="nome" placeholder="Email" class="inputype formInput">
                    <input type="password" name="senha" id="Password" placeholder="Password" class="inputype formInput">
                    <button type="submit" class="SubmitButton" disabled>Log in</button>
                </form>
                <div class="warning">Por favor preencha os campos acima</div>
                <div class="or">
                    <p>--------------------- or ---------------------</p>
                </div>
                <div class="BottomCont">
                <div class="Cadastro">
                    <a href="CadProfHTML.php" class="Cad">Cadastre-se</a>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>

</html>
