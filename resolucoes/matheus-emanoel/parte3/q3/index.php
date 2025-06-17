<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widt h, initial-scale=1.0">
    <title>Quantidade de Números Pares</title>
</head>
<body>
<h2>Informe o intervalo de números:</h2>
    <form method="post" action="index.php">
        <label >Início do intervalo:</label>
        <input type="number" name="inicio" ><br><br>
        
        <label >Fim do intervalo:</label>
        <input type="number" name="fim" ><br><br>
        
        <button >Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inicio = $_POST["inicio"];
        $fim = $_POST["fim"];
        $quantidade_pares = 0;

        for ($i = $inicio; $i <= $fim; $i++) {
            if ($i % 2 == 0) {
                $quantidade_pares++;
            }
        }

        echo "<h3>Quantidade de números pares: $quantidade_pares</h3>";
    }
    ?>
</body>
</html>