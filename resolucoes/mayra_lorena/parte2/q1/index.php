<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Maior e Menor Número.</title>
    </head>
    <body>
     <h2>Descubra o Maior e o Menor Número</h2>
        <form method="post">
            <label>Digite o primeiro número:</label>
            <input type="number" name="num1" required="">
            <br><br>
            <label>Digite o segundo número:</label>
            <input type="number" name="num2" required="">
            <br><br>
            <label>Digite o terceiro número:</label>
            <input type="number" name="num3" required="">
            <br><br>
            <button>Verificar</button>
        </form>
        <div>
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];
                    $num3 = $_POST["num3"];

                    $maior = $num1;
                    $menor = $num1;

                    if($num2 > $maior){
                        $maior = $num2;
                    }
                    if($num3 > $maior){
                        $maior = $num3;
                    }
                    if($num2 < $menor){
                        $menor = $num2;
                    }
                    if($num3 < $menor){
                        $menor = $num3;
                    }

                    echo "<p>O Menor Número é: $menor e o Maior Número é: $maior</p>";
                }
            ?>
        </div>
    </body>
</html>





