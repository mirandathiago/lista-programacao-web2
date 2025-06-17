<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 13 - Parte 3</title>
</head>
<body>
    <div>
        <?php
        // Crie um array com nomes de produtos adicionados ao carrinho de compras (ex: "Arroz", "Feijão", "Óleo", "Macarrão") e utilize a estrutura foreach para exibir cada produto em uma lista não ordenada. Não necessita de um formulário.
            $array = ["Arroz", "Camarão", "Feijão", "Goiaba", "Maracujá"];
            
            foreach($array as $produto){
                echo "<ul><li>" . $produto . "</li></ul>";
            }
        ?>
    </div>
</body>
</html>