<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1 - parte 3</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Insira um número:
            <input type="number" name="num1">
        </label>
        <button>Verificar</button>
    </form>
    <div>
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $num1 = $_POST["num1"];
                $resp = $num1;
                for($i = $num1 - 1; $i > 0; $i--){
                    $num1 = $num1 * $i;  
                }
                echo "O fatorial de $resp é $num1";
            }
        
        
        ?>
    </div>
</body>
</html>