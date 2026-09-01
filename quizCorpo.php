<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Quiz de Corpo Humano</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <a href="quizzes.php">← Voltar</a>

    <h1>Quiz de Corpo Humano</h1>
    <p>Teste seus conhecimentos sobre o corpo humano!</p>

    <form action="resultado.php" method="POST">
    <input type="hidden" name="quiz" value="corpo">

        <h2>1. Qual órgão é responsável por bombear o sangue pelo corpo?</h2>

        <input type="radio" name="q1" value="Coracao"> Coração<br>
        <input type="radio" name="q1" value="Pulmao"> Pulmão<br>
        <input type="radio" name="q1" value="Estomago"> Estômago<br>
        <input type="radio" name="q1" value="Figado"> Fígado<br>

        <h2>2. Qual é o maior órgão do corpo humano?</h2>

        <input type="radio" name="q2" value="Coracao"> Coração<br>
        <input type="radio" name="q2" value="Pele"> Pele<br>
        <input type="radio" name="q2" value="Figado"> Fígado<br>
        <input type="radio" name="q2" value="Pulmao"> Pulmão<br>

        <h2>3. Quantos ossos aproximadamente existem no corpo humano adulto?</h2>

        <input type="radio" name="q3" value="106"> 106<br>
        <input type="radio" name="q3" value="206"> 206<br>
        <input type="radio" name="q3" value="306"> 306<br>
        <input type="radio" name="q3" value="406"> 406<br>

        <h2>4. Qual órgão é responsável principalmente pela respiração?</h2>

        <input type="radio" name="q4" value="Rim"> Rim<br>
        <input type="radio" name="q4" value="Pulmao"> Pulmão<br>
        <input type="radio" name="q4" value="Estomago"> Estômago<br>
        <input type="radio" name="q4" value="Intestino"> Intestino<br>

        <h2>5. Qual órgão produz a bile?</h2>

        <input type="radio" name="q5" value="Figado"> Fígado<br>
        <input type="radio" name="q5" value="Coracao"> Coração<br>
        <input type="radio" name="q5" value="Rim"> Rim<br>
        <input type="radio" name="q5" value="Pulmao"> Pulmão<br>

        <br><br>

        <button type="submit">Finalizar Quiz</button>

    </form>

</body>
</html>