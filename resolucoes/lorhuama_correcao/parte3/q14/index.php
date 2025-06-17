<!--Crie um array com valores numéricos representando notas de um aluno. Utilize foreach para somar todas as notas e calcule a média final. Exiba o total e a média com duas casas decimais.-->

<?php

$aluno = [7.5, 8.0, 6.5, 9.0];
$soma = 0;
foreach($aluno as $nota){
    $soma = $soma + $nota;
    $media = $soma / 4;
}
$media_formatada = number_format($media, 2);
$soma_formatada = number_format($soma, 2);

echo "Soma: $soma_formatada <br> Média: $media_formatada";
?>