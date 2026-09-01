<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Quiz de Países</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <a href="quizzes.php">← Voltar</a>

    <h1>Quiz de Países</h1>
    <p>Teste seus conhecimentos sobre diferentes países!</p>

    <form action="resultado.php" method="POST">

    <input type="hidden" name="quiz" value="paises">

        <h2>1. Qual é a capital da França?</h2>

        <input type="radio" name="q1" value="Paris"> Paris<br>
        <input type="radio" name="q1" value="Madrid"> Madrid<br>
        <input type="radio" name="q1" value="Roma"> Roma<br>
        <input type="radio" name="q1" value="Berlim"> Berlim<br>

        <h2>2. Qual é o maior país do mundo em território?</h2>

        <input type="radio" name="q2" value="Brasil"> Brasil<br>
        <input type="radio" name="q2" value="China"> China<br>
        <input type="radio" name="q2" value="Russia"> Rússia<br>
        <input type="radio" name="q2" value="Canada"> Canadá<br>

        <h2>3. Em qual continente fica o Egito?</h2>

        <input type="radio" name="q3" value="Asia"> Ásia<br>
        <input type="radio" name="q3" value="Africa"> África<br>
        <input type="radio" name="q3" value="Europa"> Europa<br>
        <input type="radio" name="q3" value="America"> América<br>

        <h2>4. Qual país é conhecido pelo formato de uma bota?</h2>

        <input type="radio" name="q4" value="Italia"> Itália<br>
        <input type="radio" name="q4" value="Portugal"> Portugal<br>
        <input type="radio" name="q4" value="Grecia"> Grécia<br>
        <input type="radio" name="q4" value="Japao"> Japão<br>

        <h2>5. Qual é a capital do Japão?</h2>

        <input type="radio" name="q5" value="Pequim"> Pequim<br>
        <input type="radio" name="q5" value="Seul"> Seul<br>
        <input type="radio" name="q5" value="Tóquio"> Tóquio<br>
        <input type="radio" name="q5" value="Bangkok"> Bangkok<br>

        <br><br>

        <button type="submit">Finalizar Quiz</button>

    </form>

</body>
</html>