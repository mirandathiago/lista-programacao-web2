<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4 - Parte 3</title>
</head>
<body>
    <!-- //Joãozinho está estudando matemática e precisa saber qual é o resultado da soma dos números de 1 a N. Crie um programa que permita ao usuário informar um número inteiro N e, utilizando um laço de repetição do tipo for, calcule a soma dos números de 1 a N.-->
    <form action="index.php" method="post">
        <label> Inserir Valor N:
            <input type="number" name="N">
        </label>
        <button>Enviar</button>
    </form>
    <div>
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){ //Verificar se o formulário foi enviado.
                $N = $_POST['N'];
                $soma = 0;
                
                for($i = 1; $i <= $N; $i++){
                    $soma += $i;
                }
                echo "A soma é $soma";
            }
        ?>
    </div>
</body>
</html>