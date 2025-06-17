<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>questao 13</title>
</head>
<body>
    <h2>Calculadora</h2>
    <form action="index.php" method="post">
        <label for="valor1">Valor 1:
        <input type="number" name="valor1" required>
        </label>
        <br><br>

        <label for="valor2">Valor 2:
        <input type="number" name="valor2" required>
        </label>
        <br><br>

        <label>Operação:</label>
        <select name="operacao" required>
            <option value="Selecione">Selecione</option>
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select>
        <br><br>

        <button>Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];
        $operacao = $_POST["operacao"];
        $resultado = 0;

        switch ($operacao) {
            case "soma":
                $resultado = $valor1 + $valor2;
                echo "<h2>Resultado da soma: $resultado</h2>";
                break;
            case "subtracao":
                $resultado = $valor1 - $valor2;
                echo "<h2>Resultado da subtração: $resultado</h2>";
                break;
            case "multiplicacao":
                $resultado = $valor1 * $valor2;
                echo "<h2>Resultado da multiplicação: $resultado</h2>";
                break;
            case "divisao":
                if ($valor2 != 0) {
                    $resultado = $valor1 / $valor2;
                    echo "<h2>Resultado da divisão: $resultado</h2>";
                } else {
                    echo "<h2>Erro: Divisão por zero não é permitida.</h2>";
                }
                break;
            default:
                echo "<h2>Operação inválida, selecione outra operação.</h2>";
        }
    }
    ?>
</body>
</html>
