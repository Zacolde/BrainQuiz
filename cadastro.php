         <?php
         start_session();

    function validarSenha($senha, $confirmar_senha) {
        if ($senha == $confirmar_senha) {
            return true;
        } else {
            return false;
        }
    }
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

             $senha = $_POST["senha"];
             $confirmar_senha = $_POST["confirmar_senha"];
             $email = $_POST["email"];

            $_SESSION['senha'] = $senha;
            $_SESSION['email'] = $email;

            if (validarSenha($senha, $confirmar_senha)) {
             header("Location: login.php");
                exit;
             } else {
             echo "As senhas devem ser iguais!";
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

</body>
</html>

