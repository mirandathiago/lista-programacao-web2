<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte 2 - Questão 1</title>
</head>
<body>
    <form action="parte2_q1.php" method="post">
        <label> 
            Insira o primeiro valor:
            <input type="number" name="num1">
        </label>
        <br>
        <label>
            Insira o segundo valor:
            <input type="number" name="num2">
        </label>
        <br>
        <label>
            Insira o terceiro valor:
            <input type="number" name="num3">
        </label>
        <br>
        <button>Verificar</button>
    </form>
    <div>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $num3 = $_POST["num3"];
                
                if($num1 > $num2 && $num1 > $num3){
                    echo "Maior número: $num1 <br>";
                    if($num2 > $num3){
                        echo "Menor número: $num3";
                    }else{
                        echo "Menor número: $num2";
                    }
                }else if($num2 > $num1 && $num1 > $num3){
                    echo "Maior número: $num2 <br>";
                    if($num1 > $num3){
                        echo "Menor número: $num3";
                    }else{
                        echo "Menor número: $num1";
                    }
                }else if($num3 > $num2 && $num3 > $num2){
                    echo "Maior número: $num3 <br>";
                    if($num2 > $num1){
                        echo "Menor número: $num1";
                    }else{
                        echo "Menor número: $num2";
                    }
                }
            }
        ?>
    </div>
</body>
</html>