<!DOCTYPE html>
<html>
<head>
    <title>Calculadora da Conta de Energia</title>
</head>
<body>
    <h2>Calculadora da Conta de Energia</h2>
    <form method="post">
        <label for="consumo">Consumo da energia (kWh):</label>
        <input type="number" name="consumo" required> 
        <button type="submit">Calcular</button>
    </form>

    <?php
    /*o consumo em KWh*/
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $consumo /* recp o valor d consumo */ = $_POST["consumo"];
        $valor_conta = 0;

        if ($consumo <= 100) {
  /* ira armazenar*/$valor_conta = $consumo * 0.50;
 } elseif ($consumo <= 200) {
            $valor_conta = $consumo * 0.70;
        } else {
            $valor_conta = $consumo * 0.87;
        }

        // ultilizando taxa mínima

        if ($valor_conta < 20) {
            $valor_conta = 20;
        }

        echo "<h3>O Valor da energia: R$ " . number_format($valor_conta, 2) . "</h3>";
    }
    ?>
</body>
</html>
