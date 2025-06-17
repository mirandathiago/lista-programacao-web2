<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>questao 2</title>
</head>
<body>
    <h2>Tabuada</h2>
    <form action="index.php" method="post">
        <label for="numero">Digite um número inteiro:
        <input type="number" name="numero" required>
        </label>
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
