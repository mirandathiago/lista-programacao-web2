<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2 - Parte 3</title>
</head>
<body>
    <!--Desenvolva um programa que receba como entrada um número inteiro e calcule a sua tabuada de multiplicação utilizando o comando WHILE. Exiba a tabuada na tela.-->

    <form action="index.php" method="post">
        <label>Número:
            <input type="number" name="num">
        </label>
        <button>Calcular Tabuada</button>
    </form>

    <div>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $num = $_POST['num'];
                $i = 0;
                while ($i <= 10) {
                    $resultado = $num * $i;
                    echo "$num x $i = $resultado <br>";
                    $i++;
                }
            }
        ?>
    </div>
</body>
</html>