<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2 parte 3 - mais fácil que pegar doce de criança</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Insira um número:
            <input type="number" name="num">
        </label>
        <button>Fazer tabuada</button>
    </form>
    <div>
        <?php 
        #2- Desenvolva um programa que receba como entrada um número inteiro e calcule a sua tabuada de multiplicação utilizando o comando WHILE. Exiba a tabuada na tela.

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $num = $_POST["num"] ?? 0;
        
        $i = 1;
        while($i<=10){
            $resultado = $num * $i;
            echo $num." x ".$i." = ".$resultado."<br>";
            $i += 1;
        }};
        ?>
    </div>
    
</body>
</html>