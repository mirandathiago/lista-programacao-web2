<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Média do Aluno</title>
    </head>
    <body>
        <h2>Cálculo da Média do Aluno</h2>
        <div>
            <?php
                $notas = [7.5, 8.0, 6.5, 9.0];
                $soma = 0;

                foreach($notas as $nota){
                    $soma += $nota;
                }

                $quantidade = count($notas);
                $media = $soma / $quantidade;

                echo "<p>Notas: " . implode(", ", $notas) ."</p>";
                echo "<p>Soma: " . number_format($soma, 2, ',', '.') ."</p>";
                echo "<p>Média: " . number_format($media, 2, ',', '.') ."</p>";
            ?>
        </div>
    </body>
</html>




