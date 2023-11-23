<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="LeftCont">
            <img src="./image/logoU1.png" class="Logo">
        </div>
        <div class="RightCont">
            <div class="FormCont">
                <div class="LogoCont">Dev University</div>
                <form action="Login.php" method="post" class="FormContent">
                    <input type="email" name="email" id="nome" placeholder="Email" class="inputype">
                    <input type="password" name="senha" id="Password" placeholder="Password" class="inputype">
                    <button type="submit" class="SubmitButton">Log in</button>
                </form>
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