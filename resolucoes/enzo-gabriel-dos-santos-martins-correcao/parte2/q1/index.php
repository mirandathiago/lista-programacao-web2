<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1 parte 2 - Mamão com açúcar</title>
</head>
<body>
    <form action="index.php" method="post">
    <label>Insira o primeiro valor:
        <input type="number" name="A">
    </label>
    <label>Insira o segundo valor:
        <input type="number" name="B">
    </label>
    <label>Insira o terceiro valor:
        <input type="number" name="C">
    </label>
    <button>Ver maior e menor</button>
    </form>
    <div>
        <?php 
        #1- Crie um formulário com três campos do tipo number e um botão, em seguida utilizando uma estrutura condicional verifique qual o maior número e qual o menor número e mostre essa informação na tela.

        if($_SERVER['REQUEST_METHOD']=="POST"){
        $num1 = $_POST["A"];
        $num2 = $_POST["B"];
        $num3 = $_POST["C"];
        if($num1 > $num2 && $num1 > $num3){
            echo "O maior número é ".$num1."<br>";
        }else if($num2 > $num1 && $num2 > $num3){
            echo "O maior número é ".$num1."<br>";
        }else if($num3 > $num1 && $num3 > $num2){
            echo "O maior número é ".$num1."<br>";
        }else{
            echo "Não tem valor maior, há números iguais, coloque 3 números diferentes"."<hr>";
        };
        if($num1 < $num2 && $num1 < $num3){
            echo "O menor número é ".$num1."<br>";
        }else if($num2 < $num1 && $num2 < $num3){
            echo "O menor número é ".$num2."<br>";
        }else if($num3 < $num1 && $num3 < $num2){
            echo "O menor número é ".$num3."<br>";
        }else{
            echo "Não tem valor menor, há números iguais, coloque 3 números diferentes"."<hr>";
        }}
        ?>
    </div>
    
</body>
</html>