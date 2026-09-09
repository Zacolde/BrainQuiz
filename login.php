<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $senha = $_POST["senha"];
    $email = $_POST["email"];

    if (isset($_SESSION['senha']) && isset($_SESSION['email'])) {

        if ($senha == $_SESSION['senha'] && $email == $_SESSION['email']) {

            header("Location: quizzes.php");
            exit();

        } else {

            echo "<p class='erro'>Email ou senha incorretos!</p>";

        }

    } else {

        echo "Nenhuma conta cadastrada. Crie uma conta primeiro!";

    }

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Login</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="login">

        <h1>Login</h1>

        <form action="login.php" method="POST">

            <label>Email:</label>
            <input type="email" name="email" required>

            <br><br>

            <label>Senha:</label>
            <input type="password" name="senha" required>

            <br><br>

            <input type="submit" value="Entrar">

        </form>

    </div>

</body>

</html>