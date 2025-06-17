<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma dos números de 1 a N</title>
</head>
<body>
    <form action="index.php" method = "post">
        <label>Número:
            <input type="number" name="numero">
        </label>
        <button>Somar</button>
    </form>
    <div>
        <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $numero = $_POST['numero'] ?? 0;
            $resultado = 0;
            for($i = 1; $i <= $numero; $i++){
                $resultado += $i;
            }
            echo "<br> A soma é: $resultado";
        }
        ?>
    </div>
</body>
</html>