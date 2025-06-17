<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 15    - Parte 3</title>
</head>
<body>
    <div>
        <?php

       $alunos = [
           "Ana" => 8.5,
           "João" => 5.0,
           "Carlos" => 6.2
       ];
       
       foreach ($alunos as $nome => $media) {
           if ($media >= 6) {
               $resultado = "Aprovado<br>";
           } else {
               $resultado = "Reprovado<br>";
           }
           echo "$nome: $resultado\n";
       } 
        ?>
    </div>
</body>
</html>