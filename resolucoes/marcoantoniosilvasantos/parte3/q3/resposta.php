<?php
$inicio = $_POST['inicio'];
$fim = $_POST['fim'];
$quantidadePares = 0;

for ($i = $inicio; $i <= $fim; $i++) {
    if ($i % 2 == 0) {
        $quantidadePares++;
    }
}

echo "Quantidade de números pares: $quantidadePares";
?>
