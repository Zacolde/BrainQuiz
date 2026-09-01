<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Quiz de Matemática</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <a href="quizzes.php">← Voltar</a>

    <h1>Quiz de Matemática</h1>
    <p>Teste seus conhecimentos matemáticos!</p>

    <form action="resultado.php" method="POST">
    <input type="hidden" name="quiz" value="matematica">

        <h2>1. Quanto é 8 + 7?</h2>

        <input type="radio" name="q1" value="12"> 12<br>
        <input type="radio" name="q1" value="14"> 14<br>
        <input type="radio" name="q1" value="15"> 15<br>
        <input type="radio" name="q1" value="16"> 16<br>

        <h2>2. Quanto é 9 × 6?</h2>

        <input type="radio" name="q2" value="45"> 45<br>
        <input type="radio" name="q2" value="54"> 54<br>
        <input type="radio" name="q2" value="63"> 63<br>
        <input type="radio" name="q2" value="72"> 72<br>

        <h2>3. Quanto é 100 ÷ 4?</h2>

        <input type="radio" name="q3" value="20"> 20<br>
        <input type="radio" name="q3" value="25"> 25<br>
        <input type="radio" name="q3" value="30"> 30<br>
        <input type="radio" name="q3" value="40"> 40<br>

        <h2>4. Qual é o resultado de 15 - 8?</h2>

        <input type="radio" name="q4" value="5"> 5<br>
        <input type="radio" name="q4" value="6"> 6<br>
        <input type="radio" name="q4" value="7"> 7<br>
        <input type="radio" name="q4" value="8"> 8<br>

        <h2>5. Qual é o dobro de 25?</h2>

        <input type="radio" name="q5" value="40"> 40<br>
        <input type="radio" name="q5" value="45"> 45<br>
        <input type="radio" name="q5" value="50"> 50<br>
        <input type="radio" name="q5" value="55"> 55<br>

        <br><br>

        <button type="submit">Finalizar Quiz</button>

    </form>

</body>
</html>