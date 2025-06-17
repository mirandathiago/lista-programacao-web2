<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="index.php">
        <input type="number" name="consumo" placeholder="Consumo (kWh)" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $consumo = $_POST["consumo"] ?? 0;
        $valor = 0;
        
        if ($consumo <= 100) {
            $valor = $consumo * 0.50;
        } elseif ($consumo <= 200) {
            $valor = 100 * 0.50 + ($consumo - 100) * 0.70;
        } else {
            $valor = 100 * 0.50 + 100 * 0.70 + ($consumo - 200) * 0.87;
        }
        
        if ($valor < 20) $valor = 20;
        
        echo "R$ " . number_format($valor, 2, ',', '.');
    }
    ?>
</body>
</html>