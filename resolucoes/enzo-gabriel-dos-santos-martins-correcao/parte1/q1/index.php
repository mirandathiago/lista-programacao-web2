<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1 parte 1 - Fácil demais</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Digite o preço do produto:
            <input type="number" name="valor">
        </label>
        <button>Calcular desconto</button>
    </form>
    <div>
        <?php 
        #1- Pedro precisa calcular o preço de um produto com um desconto de 10%. Crie um formulário que receba o preço original do produto e calcule o preço final com o desconto aplicado.

        if($_SERVER['REQUEST_METHOD']=="POST"){
            $valor = $_POST["valor"];
            $valordesc = $valor - ($valor * 0.1) ;
            echo "O valor com desconto de 10% fica ".$valordesc." reais";
        }
        ?>
    </div>
</body>
</html>