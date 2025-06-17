<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Digite um número inteiro:
            <input type="number" name="num">
        </label>
        <button>Calcular Fatorial</button>
    </form>

    <div>
        <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $num = $_POST['num'] ?? 0;
            $Inicial = $num;
            $fatorial = 1; // inicia em 1 pois é multiplicação

            for( $i = $num ; $i > 1; $i--){
                $fatorial *= $i;
                
            }
            Echo "O fatorial de $Inicial é $fatorial";
        }
        ?>
    </div>

</body>
</html>