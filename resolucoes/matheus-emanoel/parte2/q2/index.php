<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Energia</title>
</head>
<body>
<h2>Calculadora de Conta de Energia</h2>
    <form method="post" action="index.php">
        <label >Consumo de energia (kWh):</label>
        <input type="number" name="consumo" >
        <button >Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $consumo = $_POST["consumo"];
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

        echo "<h3>Valor da conta de energia: R$ " .$valor_conta . "</h3>";
    }
    ?>
</body>
</html>
