<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicação</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Número:
            <input type="number" name="numero">
        </label>
        <button>Multiplicar</button>
    </form>
    <div>
        <?php 
        if($_SERVER['REQUEST_METHOD']== "POST"){
            $numero = $_POST['numero'] ?? 0;

            $a = 1;
            while($a <= 10){
                $resultado = $numero * $a;
                echo "$numero x $a = $resultado <br>";
                $a++;
            }
        }
        ?>
    </div>
</body>
</html>