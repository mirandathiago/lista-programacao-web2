<?php
 if($_SERVER['REQUEST_METHOD'] == "POST"){
    $numeroF = $_POST['numeroF'] ?? 0;
    $soma = 0;

    if($numeroF >= 0){

        for($i = 1; $i <= $numeroF; $i++){
            $soma += $i;
        }

    } else{
        echo "Digite um valor inteiro";
    }
        echo "<p> Soma dos números de 1 a $numeroF: $soma </p>";
 }
?>