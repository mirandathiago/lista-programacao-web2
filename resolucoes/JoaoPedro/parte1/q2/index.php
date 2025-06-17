<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao 2</title>
</head>
<body>

    <h1>Calcular Dobro e Metade</h1>
    <form action="index.php" method="post">
        <label>Digite um número:
            <input type="number" name="numero">
        </label>
        <button>Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        $dobro = $numero * 2;
        $metade = $numero / 2;
        echo "<h2>Dobro: $dobro e Metade: $metade</h2>";
    }
    ?>
    
</body>
</html>