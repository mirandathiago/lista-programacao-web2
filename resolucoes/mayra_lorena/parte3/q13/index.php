<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
  </head>
  <body>
    <h2>Produtos no Carrinho de Compras:</h2>
    <ul>
      <div>
        <?php
          $produtos = ["Arroz", "Feijão", "Óleo", "Macarrão","Picanha","Suco de Maracujá"];

          foreach($produtos as $item){
            echo "<li>$item</li>";
          }
        ?>
      </div>
    </ul>
  </body>
</html>




