<?php
$notas = [7.5, 8.1, 6.5, 9.0];
$soma = 0;
$media = 0;

foreach($notas as $nota){
    $soma = $soma + $nota;
}

$media = ($soma/4);
echo "A soma é: ", number_format($soma, 2, ".", ""), "<br>";
echo "A média é: ", number_format($media, 2, ".", "");