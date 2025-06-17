<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
</head>
<body>
    <h2>Calculadora</h2>
    <form method="post">
        <label for="valor1">Valor 1:</label>
        <input type="number" name="valor1" id="valor1" required><br><br>
        
        <label for="valor2">Valor 2:</label>
        <input type="number" name="valor2" id="valor2" required><br><br>
        
        <label for="operacao">Operação:</label>
        <select name="operacao" id="operacao" required>
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select><br><br>
        
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = $_POST["valor1"] ?? 0;
        $valor2 = $_POST["valor2"] ?? 0;
        $operacao = $_POST["operacao"] ?? '';
        $resultado = 0;
        $operador = '';
        
        switch ($operacao) {
            case 'soma':
                $resultado = $valor1 + $valor2;
                $operador = 'soma';
                break;
            case 'subtracao':
                $resultado = $valor1 - $valor2;
                $operador = 'subtração';
                break;
            case 'multiplicacao':
                $resultado = $valor1 * $valor2;
                $operador = 'multiplicação';
                break;
            case 'divisao':
               $resultado = $valor1 / $valor2;
               $operador = 'divisão';
               break;
            default:
                echo "<p>Operação inválida.</p>";
                exit;
        }
        
        echo "<p>Resultado da $operador: $resultado</p>";
    }
    ?>
</body>
</html>