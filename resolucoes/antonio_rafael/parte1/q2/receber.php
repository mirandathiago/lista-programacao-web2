<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $num1 = $_POST['num1'] ?? 0;

    $dobro = ($num1 * 2);
    $metade = ($num1 * 0.5);

    echo "O dobro de $num1 é: $dobro <br>" ;
    echo "A metade de $num1 é: $metade";
}

?>