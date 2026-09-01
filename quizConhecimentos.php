<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Quiz de Conhecimentos Gerais</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <a href="quizzes.php">← Voltar</a>

    <h1>Quiz de Conhecimentos Gerais</h1>
    <p>Teste seus conhecimentos sobre assuntos variados!</p>

    <form action="resultado.php" method="POST">
    <input type="hidden" name="quiz" value="conhecimentos">

        <h2>1. Qual é o maior planeta do Sistema Solar?</h2>

        <input type="radio" name="q1" value="Terra"> Terra<br>
        <input type="radio" name="q1" value="Marte"> Marte<br>
        <input type="radio" name="q1" value="Jupiter"> Júpiter<br>
        <input type="radio" name="q1" value="Saturno"> Saturno<br>

        <h2>2. Quantos dias possui um ano comum?</h2>

        <input type="radio" name="q2" value="360"> 360<br>
        <input type="radio" name="q2" value="365"> 365<br>
        <input type="radio" name="q2" value="366"> 366<br>
        <input type="radio" name="q2" value="370"> 370<br>

        <h2>3. Qual é o idioma mais falado no Brasil?</h2>

        <input type="radio" name="q3" value="Espanhol"> Espanhol<br>
        <input type="radio" name="q3" value="Ingles"> Inglês<br>
        <input type="radio" name="q3" value="Portugues"> Português<br>
        <input type="radio" name="q3" value="Frances"> Francês<br>

        <h2>4. Qual é o planeta conhecido como Planeta Vermelho?</h2>

        <input type="radio" name="q4" value="Venus"> Vênus<br>
        <input type="radio" name="q4" value="Marte"> Marte<br>
        <input type="radio" name="q4" value="Mercurio"> Mercúrio<br>
        <input type="radio" name="q4" value="Netuno"> Netuno<br>

        <h2>5. Qual instrumento é utilizado para medir a temperatura?</h2>

        <input type="radio" name="q5" value="Barometro"> Barômetro<br>
        <input type="radio" name="q5" value="Termometro"> Termômetro<br>
        <input type="radio" name="q5" value="Velocimetro"> Velocímetro<br>
        <input type="radio" name="q5" value="Higrometro"> Higrômetro<br>

        <br><br>

        <button type="submit">Finalizar Quiz</button>

    </form>

</body>
</html>