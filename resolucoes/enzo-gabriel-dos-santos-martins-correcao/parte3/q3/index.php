<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3 parte 3 - Fiz de olho fechado </title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Inicio do intervalo:
            <input type="number" name="inicio">
        </label>
        <label>Fim do intervalo:
            <input type="number" name="fim">
        </label>
        <button>Enviar</button>
    </form>
    <div>
        <?php 
        #João deseja saber quantos números pares existem em um intervalo. Crie um programa que permita ao usuário informar os dois números que delimitam o intervalo e, utilizando um laço de repetição do tipo for, calcule a quantidade de números pares nesse intervalo.

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $inicio = $_POST["inicio"];
            $fim= $_POST["fim"];
            $cont=0;
            for($i = $inicio+1; $i < $fim; $i++){
                if($i%2==0){
                    $cont++;
                }
            }
            echo "Tem ".$cont." números pares entre ".$inicio." e ".$fim;
        }
        ?>
    </div>
    
</body>
</html>