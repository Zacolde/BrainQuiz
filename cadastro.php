<?php

session_start();

function validarSenha($senha, $confirmar_senha) {

    if ($senha == $confirmar_senha) {
        return true;
    } else {
        return false;
    }

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    $confirmar_senha = $_POST["confirmar_senha"];
    $email = $_POST["email"];

    if (validarSenha($senha, $confirmar_senha)) {

        $_SESSION['nome'] = $nome;
        $_SESSION['senha'] = $senha;
        $_SESSION['email'] = $email;

        header("Location: login.php");
        exit;

    } else {

         echo "<p class='erro'>As senhas devem ser iguais!</p>";


    }

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Cadastro</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="cadastro">

        <h1>Cadastro</h1>

        <form action="cadastro.php" method="POST">

            <label>Nome:</label>
            <input type="text" name="nome" required>

            <br><br>

            <label>Email:</label>
            <input type="email" name="email" required>

            <br><br>

            <label>Senha:</label>
            <input type="password" name="senha" required>

            <br><br>

            <label>Confirme sua senha:</label>
            <input type="password" name="confirmar_senha" required>

            <br><br>

            <input type="submit" value="Cadastrar">

        </form>

    </div>

</body>

</html>