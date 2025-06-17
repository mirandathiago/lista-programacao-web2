<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1 parte 3 - Mel na chupeta</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Digite um número:
            <input type="number" name="num">
        </label>
        <button>Calcular fatorial do número</button>
    </form>
    <div>
        <?php 
        #O fatorial de um número é calculado pela multiplicação desse número por todos os seus antecessores até chegar ao número 1. Desenvolva um programa que receba como entrada através de um formulário um número inteiro e calcule o seu fatorial utilizando o comando FOR. 

        if($_SERVER['REQUEST_METHOD']=="POST"){
            $num = $_POST["num"];
            $inicio = $num;
            if($num == 0){
                echo "O fatorial de 0 é igual a 1";
            }else{
                for($i=($num-1) ;$i > 0 ;$i--){
                    $num = $num * $i;
                }
                echo "O fatorial do número ".$inicio." é de ".$num;
            }
        }
        ?>
    </div>
    
</body>
</html>