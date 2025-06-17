<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $num = $_POST['num'] ?? 0;
    $fatorial = 1;

    if ($num >= 0) {
        for ($i = $num; $i >= 1; $i--) {
            $fatorial *= $i;
        }

        echo "$num! = $fatorial";
    } else {
        echo "Digite um número inteiro positivo!";
    }
}
?>
