<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Digite um número inteiro:
            <input type="number" name="numero">
        </label>
        <button>Calcular Fatorial</button>
    </form>

    <div>
        <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $numero = $_POST['numero'] ?? 0;
             $fat = 1; //inicializa com 1 pois é multiplicação, se for 0 resultaria em 0. 

             if($numero == 0){ //O fatorial de 0 é 1.
                $fat = 1;
            }else{
                for($i = $numero; $i >= 1; $i--){ //repete i até que quando i =1
                    $fat *= $i; //multiplica i pelo fatorial que está sendo acumulado
            }
        }
        echo "O fatorial de $numero é $fat";
    }
        ?>
    </div>
</body>
</html>