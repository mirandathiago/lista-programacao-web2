<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Conta de Energia</title>
</head>
<body>
    <h2>Calculadora de Conta de Energia</h2>
    <form method="post">
        <label>Consumo de energia (kWh):</label>
        <input type="number" name="consumo" step="0.01" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $consumo = floatval($_POST["consumo"]);
        $valor_conta = 0;

        if ($consumo <= 100) {
            $valor_conta = $consumo * 0.50;
        } elseif ($consumo <= 200) {
            $valor_conta = $consumo * 0.70;
        } else {
            $valor_conta = $consumo * 0.87;
        }

        // Aplicando a taxa mínima
        if ($valor_conta < 20) {
            $valor_conta = 20;
        }

        echo "<h3>Valor da conta de energia: R$ " . number_format($valor_conta, 2, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>
