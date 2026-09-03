<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz de Conhecimentos Gerais - BrainQuiz</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>

    <div class="logo">
        🧠 BrainQuiz
    </div>

    <nav>
        <a href="index.php">Início</a>
        <a href="quizzes.php">Quizzes</a>
    </nav>

</header>

<form action="resultado.php" method="POST">

    <input type="hidden" name="quiz" value="conhecimentos">

    <div class="pergunta">
        <div class="pergunta-box">

            <div class="numero">Pergunta 1 de 15</div>

            <h2>Qual planeta possui atualmente o maior número conhecido de luas?</h2>

            <label class="alternativa">
                <input type="radio" name="q1" value="Jupiter">
                Júpiter
            </label>

            <label class="alternativa">
                <input type="radio" name="q1" value="Saturno">
                Saturno
            </label>

            <label class="alternativa">
                <input type="radio" name="q1" value="Urano">
                Urano
            </label>

            <label class="alternativa">
                <input type="radio" name="q1" value="Netuno">
                Netuno
            </label>

        </div>
    </div>


    <div class="pergunta">
        <div class="pergunta-box">

            <div class="numero">Pergunta 2 de 15</div>

            <h2>Qual elemento químico é representado pelo símbolo Fe?</h2>

            <label class="alternativa">
                <input type="radio" name="q2" value="Fluor">
                Flúor
            </label>

            <label class="alternativa">
                <input type="radio" name="q2" value="Ferro">
                Ferro
            </label>

            <label class="alternativa">
                <input type="radio" name="q2" value="Fosforo">
                Fósforo
            </label>

            <label class="alternativa">
                <input type="radio" name="q2" value="Francio">
                Frâncio
            </label>

        </div>
    </div>


    <div class="pergunta">
        <div class="pergunta-box">

            <div class="numero">Pergunta 3 de 15</div>

            <h2>Em qual camada da atmosfera ocorre a maior parte dos fenômenos meteorológicos?</h2>

            <label class="alternativa">
                <input type="radio" name="q3" value="Estratosfera">
                Estratosfera
            </label>

            <label class="alternativa">
                <input type="radio" name="q3" value="Mesosfera">
                Mesosfera
            </label>

            <label class="alternativa">
                <input type="radio" name="q3" value="Troposfera">
                Troposfera
            </label>

            <label class="alternativa">
                <input type="radio" name="q3" value="Termosfera">
                Termosfera
            </label>

        </div>
    </div>


    <div class="pergunta">
        <div class="pergunta-box">

            <div class="numero">Pergunta 4 de 15</div>

            <h2>Quem escreveu o livro "Dom Casmurro"?</h2>

            <label class="alternativa">
                <input type="radio" name="q4" value="JoseDeAlencar">
                José de Alencar
            </label>

            <label class="alternativa">
                <input type="radio" name="q4" value="Machado">
                Machado de Assis
            </label>

            <label class="alternativa">
                <input type="radio" name="q4" value="Drummond">
                Carlos Drummond de Andrade
            </label>

            <label class="alternativa">
                <input type="radio" name="q4" value="Clarice">
                Clarice Lispector
            </label>

        </div>
    </div>


    <div class="pergunta">
        <div class="pergunta-box">

            <div class="numero">Pergunta 5 de 15</div>

            <h2>Qual é o maior oceano do planeta?</h2>

            <label class="alternativa">
                <input type="radio" name="q5" value="Atlantico">
                Atlântico
            </label>

            <label class="alternativa">
                <input type="radio" name="q5" value="Indico">
                Índico
            </label>

            <label class="alternativa">
                <input type="radio" name="q5" value="Artico">
                Ártico
            </label>

            <label class="alternativa">
                <input type="radio" name="q5" value="Pacifico">
                Pacífico
            </label>

        </div>
    </div>


    <div class="pergunta">
        <div class="pergunta-box">

            <div class="numero">Pergunta 6 de 15</div>

            <h2>Qual é o gás mais abundante na atmosfera terrestre?</h2>

            <label class="alternativa">
                <input type="radio" name="q6" value="Oxigenio">
                Oxigênio
            </label>

            <label class="alternativa">
                <input type="radio" name="q6" value="Nitrogenio">
                Nitrogênio
            </label>

            <label class="alternativa">
                <input type="radio" name="q6" value="Carbono">
                Dióxido de carbono
            </label>

            <label class="alternativa">
                <input type="radio" name="q6" value="Hidrogenio">
                Hidrogênio
            </label>

        </div>
    </div>


    <div class="pergunta">
        <div class="pergunta-box">

            <div class="numero">Pergunta 7 de 15</div>

            <h2>Quem formulou as três leis do movimento e a lei da gravitação universal?</h2>

            <label class="alternativa">
                <input type="radio" name="q7" value="Einstein">
                Albert Einstein
            </label>

            <label class="alternativa">
                <input type="radio" name="q7" value="Galileu">
                Galileu Galilei
            </label>

            <label class="alternativa">
                <input type="radio" name="q7" value="Newton">
                Isaac Newton
            </label>

            <label class="alternativa">
                <input type="radio" name="q7" value="Tesla">
                Nikola Tesla
            </label>

        </div>
    </div>


    <div class="pergunta">
        <div class="pergunta-box">

            <div class="numero">Pergunta 8 de 15</div>

            <h2>Como é chamado o processo pelo qual as plantas produzem seu próprio alimento utilizando luz?</h2>

            <label class="alternativa">
                <input type="radio" name="q8" value="Respiracao">
                Respiração
            </label>

            <label class="alternativa">
                <input type="radio" name="q8" value="Fermentacao">
                Fermentação
            </label>

            <label class="alternativa">
                <input type="radio" name="q8" value="Fotossintese">
                Fotossíntese
            </label>

            <label class="alternativa">
                <input type="radio" name="q8" value="Digestao">
                Digestão
            </label>

        </div>
    </div>


    <div class="pergunta">
        <div class="pergunta-box">

            <div class="numero">Pergunta 9 de 15</div>

            <h2>Qual foi o primeiro país a enviar um ser humano ao espaço?</h2>

            <label class="alternativa">
                <input type="radio" name="q9" value="EstadosUnidos">
                Estados Unidos
            </label>

            <label class="alternativa">
                <input type="radio" name="q9" value="UniaoSovietica">
                União Soviética
            </label>

            <label class="alternativa">
                <input type="radio" name="q9" value="China">
                China
            </label>

            <label class="alternativa">
                <input type="radio" name="q9" value="Alemanha">
                Alemanha
            </label>

        </div>
    </div>


    <div class="pergunta">
        <div class="pergunta-box">

            <div class="numero">Pergunta 10 de 15</div>

            <h2>Qual é a unidade básica de informação na computação?</h2>

            <label class="alternativa">
                <input type="radio" name="q10" value="Byte">
                Byte
            </label>

            <label class="alternativa">
                <input type="radio" name="q10" value="Bit">
                Bit
            </label>

            <label class="alternativa">
                <input type="radio" name="q10" value="Megabyte">
                Megabyte
            </label>

            <label class="alternativa">
                <input type="radio" name="q10" value="Pixel">
                Pixel
            </label>

        </div>
    </div>


    <div class="pergunta">
        <div class="pergunta-box">

            <div class="numero">Pergunta 11 de 15</div>

            <h2>Como é chamada a mudança do estado líquido para o gasoso?</h2>

            <label class="alternativa">
                <input type="radio" name="q11" value="Fusao">
                Fusão
            </label>

            <label class="alternativa">
                <input type="radio" name="q11" value="Condensacao">
                Condensação
            </label>

            <label class="alternativa">
                <input type="radio" name="q11" value="Solidificacao">
                Solidificação
            </label>

            <label class="alternativa">
                <input type="radio" name="q11" value="Vaporizacao">
                Vaporização
            </label>

        </div>
    </div>


    <div class="pergunta">
        <div class="pergunta-box">

            <div class="numero">Pergunta 12 de 15</div>

            <h2>Qual continente possui o maior número de países?</h2>

            <label class="alternativa">
                <input type="radio" name="q12" value="Asia">
                Ásia
            </label>

            <label class="alternativa">
                <input type="radio" name="q12" value="Africa">
                África
            </label>

            <label class="alternativa">
                <input type="radio" name="q12" value="Europa">
                Europa
            </label>

            <label class="alternativa">
                <input type="radio" name="q12" value="America">
                América
            </label>

        </div>
    </div>


    <div class="pergunta">
        <div class="pergunta-box">

            <div class="numero">Pergunta 13 de 15</div>

            <h2>Qual instrumento é utilizado para medir a pressão atmosférica?</h2>

            <label class="alternativa">
                <input type="radio" name="q13" value="Termometro">
                Termômetro
            </label>

            <label class="alternativa">
                <input type="radio" name="q13" value="Barometro">
                Barômetro
            </label>

            <label class="alternativa">
                <input type="radio" name="q13" value="Higrometro">
                Higrômetro
            </label>

            <label class="alternativa">
                <input type="radio" name="q13" value="Anemometro">
                Anemômetro
            </label>

        </div>
    </div>


    <div class="pergunta">
        <div class="pergunta-box">

            <div class="numero">Pergunta 14 de 15</div>

            <h2>Qual é a principal estrela do Sistema Solar?</h2>

            <label class="alternativa">
                <input type="radio" name="q14" value="Lua">
                Lua
            </label>

            <label class="alternativa">
                <input type="radio" name="q14" value="Sirius">
                Sirius
            </label>

            <label class="alternativa">
                <input type="radio" name="q14" value="Sol">
                Sol
            </label>

            <label class="alternativa">
                <input type="radio" name="q14" value="Venus">
                Vênus
            </label>

        </div>
    </div>


    <div class="pergunta">
        <div class="pergunta-box">

            <div class="numero">Pergunta 15 de 15</div>

            <h2>Em qual civilização foi construída Machu Picchu?</h2>

            <label class="alternativa">
                <input type="radio" name="q15" value="Maia">
                Maia
            </label>

            <label class="alternativa">
                <input type="radio" name="q15" value="Asteca">
                Asteca
            </label>

            <label class="alternativa">
                <input type="radio" name="q15" value="Inca">
                Inca
            </label>

            <label class="alternativa">
                <input type="radio" name="q15" value="Romana">
                Romana
            </label>

        </div>
    </div>


    <div class="pergunta">
        <div class="pergunta-box">

            <div class="numero">Final do Quiz</div>

            <h2>🎉 Você chegou ao final!</h2>

            <p>Clique no botão abaixo para ver seu resultado.</p>

            <button class="finalizar" type="submit">
                Finalizar Quiz
            </button>

        </div>
    </div>

</form>

<script>
    const perguntas = document.querySelectorAll(".pergunta-box");

    const observador = new IntersectionObserver(function(elementos) {

        elementos.forEach(function(elemento) {

            if (elemento.isIntersecting) {
                elemento.target.classList.add("visivel");
            }

        });

    }, {
        threshold: 0.5
    });

    perguntas.forEach(function(pergunta) {
        observador.observe(pergunta);
    });
</script>

</body>
</html>mas 