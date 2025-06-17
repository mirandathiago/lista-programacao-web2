<!DOCTYPE html>
<html>
<head>
    <title>Verificação de Dia da Semana</title>
</head>
<body>
    <h2>Escolha um dia da semana (1 a 7):</h2>
    <form method="post" action="index.php">
        <label >Selecione o dia:</label>
        <select name="dia" required>
            <option value="1">Dia 1</option>
            <option value="2">Dia 2</option>
            <option value="3">Dia 3</option>
            <option value="4">Dia 4</option>
            <option value="5">Dia 5</option>
            <option value="6">Dia 6</option>
            <option value="7">Dia 7</option>
        </select>
        <button>Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dia = $_POST["dia"];
        $mensagem = "";

        switch ($dia) {
            case 1:
                $mensagem = "Domingo é um final de semana.";
                break;
            case 2:
                $mensagem = "Segunda-feira é um dia útil.";
                break;
            case 3:
                $mensagem = "Terça-feira é um dia útil.";
                break;
            case 4:
                $mensagem = "Quarta-feira é um dia útil.";
                break;
            case 5:
                $mensagem = "Quinta-feira é um dia útil.";
                break;
            case 6:
                $mensagem = "Sexta-feira é um dia útil.";
                break;
            case 7:
                $mensagem = "Sábado é um final de semana.";
                break;
            default:
                $mensagem = "Dia inválido. Selecione um número entre 1 e 7.";
        }

        echo "<h3>$mensagem</h3>";
    }
    ?>
</body>
</html>
