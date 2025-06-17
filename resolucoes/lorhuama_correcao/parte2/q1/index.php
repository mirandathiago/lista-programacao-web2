<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1 - Parte 2</title>
</head>
<body>
    <!--Criar um formulário com três campos do tipo number e um botão, em seguida utilizando uma estrutura condicional verifique qual o maior número e qual o menor número e mostre essa informação na tela.-->
    <form action="index.php" method="post">
        <label>Número 1:
            <input type="number" name="numero1">
        </label>
        <label>Número 2:
            <input type="number" name="numero2">
        </label>
        <label>Número 3:
            <input type="number" name="numero3">
        </label>
        <button>Enviar</button>
    </form>
    
    <div>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $numero1 = $_POST["numero1"];
                $numero2 = $_POST["numero2"];
                $numero3 = $_POST["numero3"];
                $maior = 0;
                $menor = 0;

                if($numero1 > $numero2 && $numero1 > $numero3){
                    $maior = $numero1;
                }else if($numero2 > $numero1 && $numero2 > $numero3){
                    $maior = $numero2;
                }else if($numero3 > $numero1 && $numero3 > $numero2){
                    $maior = $numero3;
                }

                if($numero1 < $numero2 && $numero1 < $numero3){
                    $menor = $numero1;
                }else if($numero2 < $numero1 && $numero2 < $numero3){
                    $menor = $numero2;
                }else if($numero3 < $numero1 && $numero3 < $numero2){
                    $menor = $numero3;
                }

                if($numero1 == $numero2 || $numero1 == $numero3){
                    echo "Há números iguais<br>";
                }else if($numero2 == $numero1 || $numero2 == $numero3){
                    echo "Há números iguais<br>";
                }else if($numero3 == $numero1 || $numero3 == $numero2){
                    echo "Há números iguais<br>";
                }

                echo "Menor Número: $menor e o Maior Número: $maior";
                
            }
        ?>
    </div>
</body>
</html>