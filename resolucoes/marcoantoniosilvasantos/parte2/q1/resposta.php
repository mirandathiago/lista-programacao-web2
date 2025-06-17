<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

$maior = $num1;
$menor = $num1;

if ($num2 > $maior) $maior = $num2;
if ($num3 > $maior) $maior = $num3;

if ($num2 < $menor) $menor = $num2;
if ($num3 < $menor) $menor = $num3;

echo "Menor Número: $menor e o Maior Número: $maior";
?>
