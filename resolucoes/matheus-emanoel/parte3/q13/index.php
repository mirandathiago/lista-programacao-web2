<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Produtos no Carrinho:</h2>
    <ul>
        <?php
        $produtos = ["Arroz", "Feijão", "Óleo", "Macarrão", "Açúcar", "Café"];

        foreach ($produtos as $produto) {
            echo "<li>$produto</li>";
        }
        ?>
    </ul>
</body>
</html>