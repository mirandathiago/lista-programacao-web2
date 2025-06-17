<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3 - Parte 3</title>
</head>
<body>
    <!--João deseja saber quantos números pares existem em um intervalo. Crie um programa que permita ao usuário informar os dois números que delimitam o intervalo e, utilizando um laço de repetição do tipo for, calcule a quantidade de números pares nesse intervalo.-->
    <form action="index.php" method="post">
        <label> Número Inicial:
            <input type="number" name="num1">
        </label>
        <label> Número Final:
            <input type="number" name="num2">
        </label>
        <button>Calcular Pares</button>
    </form>
    <div>
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $cont = 0;
                //        valor      condição   incremento
                for($i = $num1 + 1; $i < $num2; $i++){
                    if($i % 2 == 0){
                        $cont++;
                    }
                }
                echo "Existem " . $cont . " números pares entre " . $num1 . " e " . $num2;
            }
        ?>
    </div>
</body>
</html>