<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Desconto</title>
    <meta charset="UTF-8">
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
    <h2>Calculadora para Desconto de 10%</h2>
    <form method="post">
        <label>Preço Original (R$):</label>
        <input type="number" step="0.01" name="preco" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $preco_original = floatval($_POST["preco"]);

        if ($preco_original > 0) {
            $desconto = $preco_original * 0.10;
            $preco_final = $preco_original - $desconto;

            echo "<h3>Preço com Desconto: R$ " . number_format($preco_final, 2, ',', '.') . "</h3>";
        } else {
            echo "<p style='color:red;'>Por favor, insira um valor positivo para o preço.</p>";
        }
    }
    ?>
</body>
</html>
