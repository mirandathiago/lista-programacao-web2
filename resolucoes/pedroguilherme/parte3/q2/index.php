<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alguma coisa</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Coloque um número:
                <input type="number" name="num">
        </label>
        <button>Calcule:</button>
    </form>

<div>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $num = $_POST['num'] ?? 0;

            $cont = 1;
            while($cont <= 10){
                $resultado = $num * $cont;
                echo "$num X $cont = $resultado <br>";
                $cont++;
            }

        }


    ?>
</div>
</body>
</html>