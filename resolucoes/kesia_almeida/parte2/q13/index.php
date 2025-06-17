<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
</head>
<body>
    <form method="post">
        <label>Valor 1: <input type="number" name="valor1" required></label><br>
        <label>Valor 2: <input type="number" name="valor2" required></label><br>
        <label>Operação:
            <select name="operacao" required>
                <option value="soma">Soma</option>
                <option value="subtracao">Subtração</option>
                <option value="multiplicacao">Multiplicação</option>
                <option value="divisao">Divisão</option>
            </select>
        </label><br>
        <button type="submit">Calcular</button>
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
                echo "<p>Resultado da soma: $resultado</p>";
                break;
            case "subtracao":
                $resultado = $valor1 - $valor2;
                echo "<p>Resultado da subtração: $resultado</p>";
                break;
            case "multiplicacao":
                $resultado = $valor1 * $valor2;
                echo "<p>Resultado da multiplicação: $resultado</p>";
                break;
            case "divisao":
                if ($valor2 != 0) {
                    $resultado = $valor1 / $valor2;
                    echo "<p>Resultado da divisão: $resultado</p>";
                } else {
                    echo "<p>Não é possível dividir por zero.</p>";
                }
                break;
            default:
                echo "<p>Operação inválida.</p>";
        }
    }
    ?>
      <br>
    <a href="Questao13.php">Voltar<a>
    <bR>
</body>
</html>