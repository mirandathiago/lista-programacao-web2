<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 13 - parte 3</title>
</head>
<body>
    <div>
        <?php
            $produtos = ["Arroz","Feijão","Macarão","Carne","Sorvete"];
            foreach($produtos as $produtos){
                echo "<ul>
                        <li>$produtos</li>
                    </ul>";
            }
        ?>
    </div>
</body>
</html>



        