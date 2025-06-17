<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Informe três números:</h2>
    <form method="post" action="index.php">
        <label >Número 1:</label>
        <input type="number" name="num1" ><br><br>
        
        <label >Número 2:</label>
        <input type="number" name="num2" ><br><br>
        
        <label >Número 3:</label>
        <input type="number" name="num3" ><br><br>
        
        <button >Verificar</button>
    </form>

    <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];

        if($num1==$num2 || $num2==$num3 || $num3==$num1){
            echo"Escreva números diferentes.";
        }
        elseif($num1> $num2 && $num1 > $num3){
            echo "O Maior número é $num1";
            if($num2>$num3){
                echo " O Menor número é $num3 ";
            }else{
                echo " O Menor número é $num2";
            }
        }
        elseif($num2> $num1 && $num2 > $num3){
            echo "O Maior númeor é $num2";
            if($num1>$num3){
                echo " O Menor número é $num3";
            }else{
                echo " O Menor número é $num1";
            }
        }
        elseif($num3> $num2 && $num3 > $num1){
            echo "O Maior númeor é $num3";
            if($num1>$num2){
                echo " O Menor número é $num2";
            }else{
                echo " O Menor número é $num1";
            }
        }
        
    }
    ?>

</body>
</html>