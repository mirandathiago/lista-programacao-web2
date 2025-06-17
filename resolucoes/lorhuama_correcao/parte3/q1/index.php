<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1 - Parte 3</title>
</head>
<body>
    <!--O fatorial de um número é calculado pela multiplicação desse número por todos os seus antecessores até chegar ao número 1. Desenvolva um programa que receba como entrada através de um formulário um número inteiro e calcule o seu fatorial utilizando o comando FOR.-->
    <form action="index.php" method="post">
        <label>Número:
            <input type="number" name="num">
        </label>
        <button>Calcular</button>
    </form>

    <div>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $num = $_POST['num'];
                for($i = $num - 1; $i > 0; $i--){
                    $num = $num * $i;
                }
                echo $num;
            }
        ?>
    </div>
</body>
</html>