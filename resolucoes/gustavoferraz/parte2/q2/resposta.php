<?php
$consumo = $_POST['consumo'];
$valor = 0;

if ($consumo <= 100) {
    $valor = $consumo * 0.50;
} elseif ($consumo <= 200) {
    $valor = $consumo * 0.70;
} else {
    $valor = $consumo * 0.87;
}

if ($valor < 20) {
    $valor = 20;
}

echo "Valor da conta de energia: R$$valor";
?>
