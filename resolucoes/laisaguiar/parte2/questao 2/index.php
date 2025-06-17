<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Conta de Energia</title>
    <style>
body {
    background-color: #f0f4f8;
    font-family: Arial, Helvetica, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
}

.container {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    width: 100%;
    max-width: 400px;
    text-align: center;
}

h2, h3 {
    color: #333333;
}

form label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

form input, form button {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid #cccccc;
    font-size: 16px;
}

form button {
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}

form button:hover {
    background-color: #45a049;
}

ul {
    text-align: left;
    margin-top: 20px;
}
</style>
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
