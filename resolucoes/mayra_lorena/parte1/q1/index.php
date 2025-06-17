<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Valor do Desconto.</title>
    </head>
    <body>
            <h2>Calcular Desconto</h2>
                <form method="post">
                    <label>Digite o valor do produto:
                        <input name="preco" type="number" id="num" required="">
                    </label>
                    <button name="enviar">Enviar</button>
                </form>
        <div>
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $preco = $_POST["preco"];
                    $desconto = $preco * 0.10;
                    $precoFinal = $preco - $desconto;
        
                echo "<p>Preço com desconto: R$ " . number_format($precoFinal, 2, ',', '.') ."</p>";
                }
            ?>
        </div>
    </body>
</html>






