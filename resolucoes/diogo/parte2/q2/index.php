<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2 - parte 2</title>
</head>
<body>
    <form action="index.php" method = "post">
        <label> Inserira o consumo de energia:
            <input type="number" name = "num1">
        </label>
        <button>Verificar</button>
    </form>
    <div>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){

        $num1 = $_POST["num1"];
        $valor = 0;

        if($num1 <= 100 || $num1 < 20){
            $valor = $num1 * 0.50 + 20;
            echo "O consumo é de $valor";
        }else if($num1 >= 101 && $num1 <= 200){
            $valor = $num1 * 0.70 + 20;
            echo "O consumo é de $valor";
        }else if ($num1 > 200){
            $valor = $num1 * 0.87 + 20;
            echo "O consumo é de $valor";
        }
    }
        ?>
    </div>
    
</body>
</html>