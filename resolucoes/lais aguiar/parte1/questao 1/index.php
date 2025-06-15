<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Desconto</title>
    <meta charset="UTF-8">
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
