<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>outra coisa</title>
</head>
<body>
    <form action="index.php" method="post">
    <label > Digite um número:
        <input type="number" name="num">
    </label>
    <button>Calcule:</button>
    </form>
    <div>
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $num = $_POST['num'] ?? 0;
                $resultado = 0;
                for($i = 1; $i <= $num; $i++){
                    $resultado = $resultado + $i;
                }
                echo "<br> A soma dos numeros que vc escolheu é $resultado ";
            }
        ?>
    </div>
</body>
</html>