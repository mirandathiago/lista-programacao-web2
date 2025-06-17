<?php
$n = $_POST['n'];
$soma = 0;

for ($i = 1; $i <= $n; $i++) {
    $soma += $i;
}

echo "Soma dos números de 1 a $n: $soma";
?>
