<?php
$numero = $_POST['numero'];
$fatorial = 1;
$calculo = "";

if ($numero == 0) {
    $fatorial = 1;
    $calculo = "1";
} else {
    for ($i = $numero; $i >= 1; $i--) {
        $fatorial *= $i;
        $calculo .= ($i == 1) ? "$i" : "$i x ";
    }
}

echo "Resultado: $fatorial <br>";
echo "Cálculo realizado: $calculo";
?>
