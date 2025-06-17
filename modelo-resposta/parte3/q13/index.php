<!DOCTYPE html>
<html>
<head>
    <title>Cesta de Compras</title>
</head>
<body>
    <h2>Produtos que tem no Carrinho:</h2>
    <ul>
        <?php
        $produtos /* define */ = ["Arroz", "Feijão", "Óleo", "Macarrão", "Açúcar", "Café"];

        foreach /* intera sobre a lst de */ ($produtos as $produto) {
            echo "<li>$produto</li>";
        }
        ?>
    </ul>
</body>
</html>
