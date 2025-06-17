<?php
$numero = $_POST['numero'];
$i = 1;

echo "Tabuada do número $numero:<br>";

while ($i <= 10) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado<br>";
    $i++;
}
?>
