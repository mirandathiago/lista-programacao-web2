<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao 1</title>
</head>
<body>
    
    <form action="index.php" method="post">

        <label>Digite um número:
            <input type="number" name="n1">
        </label>
        <label>Digite um número:
            <input type="number" name="n2">
        </label>
        <label>Digite um número:
            <input type="number" name="n3">
        </label>
        <button>Enviar</button>
        <br>

    </form>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
            $n3 = $_POST["n3"];

            if ($n1 >= $n2 && $n2 >= $n3) {
                echo "<h2>O menor número é $n3 e o maior número $n1</h2>";
            }elseif ($n1 >= $n3 && $n3 >= $n2) {
                echo "<h2>O menor número é $n2 e o maior número $n1</h2>";
            }elseif($n2 >= $n1 && $n1 >= $n3) {
                echo "<h2>O menor número é $n3 e o maior número $n2</h2>";
            }elseif($n2 >= $n3 && $n3 >= $n1) {
                echo "<h2>O menor número é $n1 e o maior número $n2</h2>";
            }elseif($n3 >= $n1 && $n1 >= $n2) {
                echo "<h2>O menor número é $n2 e o maior número $n3</h2>";
            }else {
                echo "<h2>O menor número é $n1 e o maior número $n3</h2>";
            }
        }

    ?>

</body>
</html>