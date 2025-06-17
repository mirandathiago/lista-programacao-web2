<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 15 - Parte 3</title>
</head>
<body>
    <?php
        //Crie um array associativo onde as chaves são os nomes dos alunos e os valores são suas médias finais.
        //              0                  1            2                  3            4
        $alunos = ["Larissa" => 7.3, "Mirela" => 5.4, "Luis" => 8.7, "Murilo" => 4.6, "Paula" => 2.6];
        foreach($alunos as $nome => $media){
            if($media >= 6.0){
                echo "$nome: Aprovado.<hr>";
            }else{
                echo "$nome: Reprovado.<hr>";
            }
        }
    ?>
</body>
</html>