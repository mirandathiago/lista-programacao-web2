<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 9 - Parte 2</title>
</head>
<body>
    <!-- Maria está planejando sair de casa, mas ela quer escolher um local adequado de acordo com o clima do dia. Para isso, ela precisa da sua ajuda para criar um formulário que permita selecionar uma das seguintes opções de clima: ensolarado, ameno, chuvoso, nublado, tempestuoso. Em seguida, utilizando a estrutura de controle switch, você deve indicar qual local é mais apropriado para cada opção de clima escolhida por Maria.-->

    <form action="index.php" method="post">
        <label>Clima:
            <select name="clima">
                <option></option>
                <option value="A">Ensolarado</option>
                <option value="B">Ameno</option>
                <option value="C">Chuvoso</option>
                <option value="D">Nublado</option>
                <option value="E">Tempestuoso</option>
            </select>
        </label>
        <button>Recomendação</button>
    </form>

    <div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $clima = $_POST["clima"];

            switch ($clima) {
                case 'A':
                    echo "Com o clima ensolarado, recomendamos ir ao Clube.";
                    break;
                case 'B':
                    echo "Com o clima ameno, recomendamos ir ao Parque.";
                    break;
                case 'C':
                    echo "Com o clima chuvoso, recomendamos ir ao Cinema.";
                    break;
                case 'D':
                    echo "Com o clima nublado, recomendamos ir ao Museu.";
                    break;
                case 'E':
                    echo "Com o clima tempestuoso, recomendamos ficar em casa.";
                    break;
            }
        }
        ?>
    </div>
</body>
</html>