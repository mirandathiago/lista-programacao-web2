<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1 - parte 2</title>
</head>
<body>
    <form action="index.php" method = "post">
        <label> Insira:
            <input type="number" name = "num1">
        </label>
        <label> Insira:
            <input type="number" name = "num2">
        </label>
        <label> Insira:
            <input type="number" name = "num3">
        </label>
        <button>Verificar</button>
        <div>
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $num3 = $_POST["num3"];

                if($num1 > $num2 && $num1 > $num3){
                    echo " O maior número é $num1 <br>";
                    if($num2 > $num3){
                        echo "O menor é $num3 <br>";    
                    }else{
                        echo "O menor é $num2 <br>";
                    }
                }
                else if($num2 > $num1 && $num2 > $num3){
                    echo " O maior número é $num2 <br>";
                    if($num1 > $num3){
                        echo "O menor é $num3 <br>";    
                    }else{
                        echo "O menor é $num1 <br>";
                    }
                }else{
                    echo "O maior é $num3 <br>";
                    if($num1 > $num2){
                        echo "O menor é $num2 <br>";
                    }else{
                        echo "O menor é $num1 <br>";
                    }
                }
            }
                
            
            ?>
        </div>

    </form>
</body>
</html>