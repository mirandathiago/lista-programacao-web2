<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tabuada com WHILE</title>
</head>
<body>
    <h2>Calculadora de Tabuada</h2>
    <form method="post">
        <label>Digite um número:</label>
        <input type="number" name="numero" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);
        $contador = 1;

        echo "<h3>Tabuada do número $numero:</h3>";

        while ($contador <= 10) {
            $resultado = $numero * $contador;
            echo "$numero x $contador = $resultado<br>";
            $contador++;
        }
    }
    ?>
</body>
</html>
