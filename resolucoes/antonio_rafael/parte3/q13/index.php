<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos no Carrinho</title>
</head>
<body>
    <?php
    $carrinho = ["Arroz", "Feijão", "Óleo", "Macarrão"];

     echo "<ul>";
     foreach($carrinho as $produto){
        echo "<li> $produto </li>";
     }
     echo "</ul>";
    ?>
</body>
</html>