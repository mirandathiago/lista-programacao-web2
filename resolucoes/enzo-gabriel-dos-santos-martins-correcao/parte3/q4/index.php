<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4 parte 3 - Fácil fácil</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Insira um número
            <input type="number" name ="num">
        </label>
        <button>Descubrir soma do número</button>
    </form>
    <div>
        <?php 
        #oãozinho está estudando matemática e precisa saber qual é o resultado da soma dos números de 1 a N. Crie um programa que permita ao usuário informar um número inteiro N e, utilizando um laço de repetição do tipo for, calcule a soma dos números de 1 a N.
        
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $num = $_POST["num"];
            $cont = $num;
            for($i = 1; $i < $num ;$i++){
                $cont += $i;
            }
            echo "A soma dos números entre ".$num." e  1 é de ".$cont;
        }
        ?>
    </div>
    
</body>
</html>