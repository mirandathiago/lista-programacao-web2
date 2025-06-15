<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nome = $_POST['nome'] ?? "";
    $hora = date('H');

    switch (true) {
        case ($hora >= 5 && $hora <= 12):
            echo "<p>Bom dia! $nome</p>";
            break;

        case ($hora >= 13 && $hora <= 18):
            echo "<p>Boa tarde! $nome</p>";
            break;

        case ($hora >= 19 && $hora <= 23):
            echo "<p>Boa noite! $nome</p>";
            break;

        default:
            echo "<p>Vá dormir, está de madrugada, $nome!</p>";
    }
}
?>
