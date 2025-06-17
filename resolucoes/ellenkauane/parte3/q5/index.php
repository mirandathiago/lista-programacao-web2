<!DOCTYPE html>
<html>
<head>
<title>Carrinho de Compras</title>
</head>
<body>
<h3>Produtos no carrinho:</h3>
<ul>
<?php
#Crie um array com nomes de produtos adicionados ao carrinho de compras (ex: "Arroz",
#"Feijão", "Óleo", "Macarrão") e utilize a estrutura foreach para exibir cada produto em uma
#lista não ordenada. Não necessita de um formulário.
$produtos = ["Arroz", "Feijão", "Óleo", "Macarrão"];
foreach ($produtos as $produto) {
echo "<li>$produto</li>";
}
?>
</ul>
</body>
</html>