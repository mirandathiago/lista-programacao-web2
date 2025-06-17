<!-- Crie um array com nomes de produtos adicionados ao carrinho de compras (ex: "Arroz", "Feijão", "Óleo", "Macarrão") e utilize a estrutura foreach para exibir cada produto em uma lista não ordenada.-->
<?php

$carrinho = ["Arroz", "Feijão", "Óleo", "Macarrão", "Farinha"];

echo "<ul>";
foreach ($carrinho as $produto) {
    echo "<li> $produto </li>";
}
echo "</ul>";

?>