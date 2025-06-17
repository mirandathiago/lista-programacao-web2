<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Calculadora de Tabuada</h2>
    <form method="post" action="index.php">
        <label >Digite um número:</label>
        <input type="number" name="numero">
        <button>Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
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