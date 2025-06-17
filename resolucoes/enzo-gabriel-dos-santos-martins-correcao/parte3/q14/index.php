<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 14 parte 3 - Fácinho fácinho</title>
</head>
<body>
    <div>
        <?php 
        #Crie um array com valores numéricos representando notas de um aluno (ex: 7.5, 8.0, 6.5, 9.0). Utilize foreach para somar todas as notas e calcule a média final. Exiba o total e a média com duas casas decimais. Não necessita de um formulário.

            $alunos = [ 10, 9.7,  3.3, 2.2, 9.9];
            $cont = 0;
            $soma = 0;
            $media = 0;

            foreach($alunos as $nota){
                $cont++;
                $soma += $nota;
                echo "A nota número " . $cont ." é $nota <br>";
            }
            $media = $soma / $cont;
            $soma =number_format($soma, 2, '.');
            $media =number_format($media, 2, '.');
            echo "<br><strong>A soma das notas é ".$soma."</strong><br>";
            echo "<strong>A média é ".$media."</strong><br>";
        ?>
    </div>
</body>
</html>