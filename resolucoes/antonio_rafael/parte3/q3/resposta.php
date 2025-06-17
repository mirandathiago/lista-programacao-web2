<?php
 if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $numI = $_POST['numI'] ?? 0;
    $numF = $_POST['numF'] ?? 0;
    $numpar = 0;

    for($i = $numI; $i <= $numF; $i++){
        if($i % 2 == 0){
            $numpar += 1;
        }
    }
     echo "<p> Quantidade de números pares: $numpar </p>";
 }
?>