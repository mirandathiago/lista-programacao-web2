<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1 - parte 1</title>
</head>
<body>
    <form action="index.php" method = "post">
        <label>Preço:
            <input type="number" name = "produto">
        </label>
        <button>Verificar</button>        
    </form>
    <div>
        <?php
            $produto = $_POST["produto"];

            $preco = $produto - ($produto * (10/100));

            echo "O preço com desconto é $preco";
        ?>
    </div>
</body>
</html>