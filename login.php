<?php
include("conexao.php");

session_start();


if (empty($_POST) or empty($_POST["email"]) or empty($_POST["senha"])) {
    print "Por favor, faça o login primeiro...";
} else {
    $email = $_POST["email"];
    $senha = $_POST["senha"];


    $sql = "SELECT * FROM register.emailsenha WHERE email = ? AND senha = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $res = $stmt->get_result();

    $row = $res->fetch_object();
    $qtd = $res->num_rows;
    
    if ($qtd > 0) {
        $_SESSION["email"] = $email;
        header('Location: TabelaNotas.php');
       
    } else {
        print "Não foi possível realizar o login!";
        
    }
}
?>

