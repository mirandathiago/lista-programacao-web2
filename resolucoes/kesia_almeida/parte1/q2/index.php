<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao-1</title>
</head>
<body>
    <h2> Calcular metade e dobro</h2>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Calcular</button> # submit é o botao que envia o formulario para o servidor
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
        $metade = $numero / 2;
        $dobro = $numero * 2;

        echo "<h3>Resultados:</h3>";
        echo "Metade: " . number_format($metade, 2) . "<br>";
        echo "Dobro: " . number_format($dobro, 2);
    }
    ?>
    <br>
    <a href="Questao01.php">Voltar</a>
    <br>
</body>
</html>