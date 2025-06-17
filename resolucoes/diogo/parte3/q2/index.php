<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Questão 2 - parte 3</title>
</head>
<body>
    <form action = "index.php" method="post">
        <label>Digite um número:
            <input type="number" name="num" required>
        </label>
        <button>Verificar</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = $_POST["num"];
            $i = 1;
            echo "<h2>Tabuada do número $num:</h2>";
            while ($i <= 10) {
                $resp = $num * $i;
                echo "$num x $i = $resp<br>";
                $i++;
            }
        }
    ?>
</body>
</html>
