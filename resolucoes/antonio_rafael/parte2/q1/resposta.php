<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $num1 = $_POST['num1'] ?? 0;
    $num2 = $_POST['num2'] ?? 0;
    $num3 = $_POST['num3'] ?? 0;

    if ($num1 == $num2 || $num1 == $num3 || $num2 == $num3) {
        echo "<p>Digite valores diferentes em cada campo!</p>";
    } else if ($num1 > $num2 && $num1 > $num3) {
        echo "<p>O maior número é o $num1</p>";
    } else if ($num2 > $num1 && $num2 > $num3) {
        echo "<p>O maior número é o $num2</p>";
    } else if ($num3 > $num1 && $num3 > $num2) {
        echo "<p>O maior número é o $num3</p>";
    } else {
        echo "<p>Todos têm o mesmo valor: $num1</p>";
    }
}

?>
