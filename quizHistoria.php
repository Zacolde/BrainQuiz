<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Quiz de História do Brasil</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <a href="quizzes.php">← Voltar</a>

    <h1>Quiz de História do Brasil</h1>
    <p>Teste seus conhecimentos sobre a história do Brasil!</p>

    <form action="resultado.php" method="POST">
    <input type="hidden" name="quiz" value="historia">

        <h2>1. Em que ano o Brasil declarou sua independência?</h2>

        <input type="radio" name="q1" value="1500"> 1500<br>
        <input type="radio" name="q1" value="1822"> 1822<br>
        <input type="radio" name="q1" value="1889"> 1889<br>
        <input type="radio" name="q1" value="1930"> 1930<br>

        <h2>2. Quem proclamou a Independência do Brasil?</h2>

        <input type="radio" name="q2" value="Tiradentes"> Tiradentes<br>
        <input type="radio" name="q2" value="DomPedroI"> Dom Pedro I<br>
        <input type="radio" name="q2" value="GetulioVargas"> Getúlio Vargas<br>
        <input type="radio" name="q2" value="DomPedroII"> Dom Pedro II<br>

        <h2>3. Em que ano foi proclamada a República no Brasil?</h2>

        <input type="radio" name="q3" value="1822"> 1822<br>
        <input type="radio" name="q3" value="1850"> 1850<br>
        <input type="radio" name="q3" value="1889"> 1889<br>
        <input type="radio" name="q3" value="1900"> 1900<br>

        <h2>4. Quem foi o primeiro presidente do Brasil?</h2>

        <input type="radio" name="q4" value="GetulioVargas"> Getúlio Vargas<br>
        <input type="radio" name="q4" value="Deodoro"> Marechal Deodoro da Fonseca<br>
        <input type="radio" name="q4" value="Juscelino"> Juscelino Kubitschek<br>
        <input type="radio" name="q4" value="Floriano"> Floriano Peixoto<br>

        <h2>5. Qual foi o período em que o Brasil foi governado por imperadores?</h2>

        <input type="radio" name="q5" value="Republica"> República<br>
        <input type="radio" name="q5" value="Imperio"> Império<br>
        <input type="radio" name="q5" value="Colonial"> Período Colonial<br>
        <input type="radio" name="q5" value="Regencia"> Regência<br>

        <br><br>

        <button type="submit">Finalizar Quiz</button>

    </form>

</body>
</html>