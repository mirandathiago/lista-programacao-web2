<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
   
    <title>Carrinho de Compras</title>
</head>
<body>

    <h2>Produtos no Carrinho:</h2>

    <ul>
    <?php
        $produtos = ["Arroz", "Feijão", "Óleo", "Macarrão", "Açúcar"];

        foreach ($produtos as $produto) {
            echo "<li>$produto</li>";
        }
        ?>
    </ul>

</body>
</html>
