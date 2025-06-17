<!DOCTYPE html>
<html>
<head>
    <title>Tabuada com WHILE</title>
</head>
<body>
    <h2>Calculadora de Tabuada</h2>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];// recupera o valor
        $contador = 1;

        echo "<h3>Tabuada do número $numero:</h3>";

        while /* intera*/ ($contador <= 10) { // usada pra ctrl lop
            $resultado = $numero * $contador;
            echo "$numero x $contador = $resultado<br>";
            $contador++; //incrementa
        }
    }
    ?>
</body>
</html>