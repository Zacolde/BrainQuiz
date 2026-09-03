<?php

$quiz = $_POST["quiz"] ?? "";

$respostas = [];

if ($quiz == "paises") {
    $respostas = [
        "India",
        "Canberra",
        "Franca",
        "Panama",
        "Brasil",
        "Turquia",
        "Espanha",
        "Romenia",
        "Turquia",
        "Wellington",
        "Suecia",
        "Bolivia",
        "Reykjavik",
        "ReinoUnido",
        "Japao"
    ];
}

if ($quiz == "corpo") {
    $respostas = [
        "Cerebelo",
        "Hemacias",
        "Pancreas",
        "FiltrarSangue",
        "Tendao",
        "Ligamento",
        "Aorta",
        "MedulaEspinhal",
        "Alveolos",
        "D",
        "IntestinoDelgado",
        "Coagulacao",
        "Tiroxina",
        "Epiglote",
        "Neuronio"
    ];
}

if ($quiz == "historia") {
    $respostas = [
        "Cabral",
        "Acucar",
        "Divisao",
        "Salvador",
        "1808",
        "DomPedroI",
        "InconfidenciaMineira",
        "Tiradentes",
        "LeiAurea",
        "PrincesaIsabel",
        "Republica",
        "Deodoro",
        "Getulio",
        "Juscelino",
        "1960"
    ];
}

if ($quiz == "matematica") {
    $respostas = [
        "100",
        "27",
        "60",
        "25",
        "170",
        "12",
        "27",
        "60",
        "162",
        "60",
        "60",
        "36",
        "25",
        "12",
        "18"
    ];
}

if ($quiz == "conhecimentos") {
    $respostas = [
        "Saturno",
        "Ferro",
        "Troposfera",
        "Machado",
        "Pacifico",
        "Nitrogenio",
        "Newton",
        "Fotossintese",
        "UniaoSovietica",
        "Bit",
        "Vaporizacao",
        "Africa",
        "Barometro",
        "Sol",
        "Inca"
    ];
}

$pontos = 0;

for ($i = 1; $i <= 15; $i++) {

    if (isset($_POST["q$i"]) && $_POST["q$i"] == $respostas[$i - 1]) {
        $pontos++;
    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main class="pagina-resultado">

        <div class="resultado">

            <h1>Resultado 📑</h1>

            <h2>Você acertou <?php echo $pontos; ?> de 15!</h2>

            <?php

            if ($pontos == 15) {
                echo "<p>Parabéns! Você acertou todas!</p>";
            } elseif ($pontos >= 8) {
                echo "<p>Muito bom! Você teve um ótimo resultado!</p>";
            } else {
                echo "<p>Continue estudando e tente novamente!</p>";
            }

            ?>

            <a href="quizzes.php" class="voltar">
                Escolher outro quiz
            </a>

        </div>

    </main>

</body>

</html>