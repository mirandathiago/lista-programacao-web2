<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Informe um número inteiro N:</h2>
    <form method="post" action="index.php">
        <label >Digite um número:</label>
        <input type="number" name="numero" required>
        <button >Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["numero"];
        $soma = 0;

        for ($i = 1; $i <= $n; $i++) {
            $soma += $i;
        }

        echo "<h3>Soma dos números de 1 a $n: $soma</h3>";
    }
    ?>
</body>
</html>