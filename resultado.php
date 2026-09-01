<?php

$quiz = $_POST["quiz"];

$respostas = [];

if ($quiz == "paises") {
    $respostas = [
        "Paris",
        "Russia",
        "Africa",
        "Italia",
        "Tóquio"
    ];
}

if ($quiz == "corpo") {
    $respostas = [
        "Coracao",
        "Pele",
        "206",
        "Pulmao",
        "Figado"
    ];
}

if ($quiz == "historia") {
    $respostas = [
        "1822",
        "DomPedroI",
        "1889",
        "Deodoro",
        "Imperio"
    ];
}

if ($quiz == "matematica") {
    $respostas = [
        "15",
        "54",
        "25",
        "7",
        "50"
    ];
}

if ($quiz == "conhecimentos") {
    $respostas = [
        "Jupiter",
        "365",
        "Portugues",
        "Marte",
        "Termometro"
    ];
}

$pontos = 0;

for ($i = 1; $i <= 5; $i++) {

    if (isset($_POST["q$i"]) && $_POST["q$i"] == $respostas[$i - 1]) {
        $pontos++;
    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <a href="quizzes.php">← Voltar para os quizzes</a>

    <h1>Resultado</h1>

    <h2>Você acertou <?php echo $pontos; ?> de 5!</h2>

    <?php

    if ($pontos == 5) {
        echo "<p>Parabéns! Você acertou todas!</p>";
    } elseif ($pontos >= 3) {
        echo "<p>Muito bom! Você teve um ótimo resultado!</p>";
    } else {
        echo "<p>Continue estudando e tente novamente!</p>";
    }

    ?>

    <br>

    <a href="quizzes.php">
        <button>Escolher outro quiz</button>
    </a>

</body>
</html>