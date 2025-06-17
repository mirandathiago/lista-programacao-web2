<?php
  if($_SERVER['REQUEST_METHOD'] == "POST"){

    $valorA = $_POST['valorA'] ?? 0;
    $valorB = $_POST['valorB'] ?? 0;
    $valorC = $_POST['valorC'] ?? 0;

    $delta = ($valorB ** 2) - 4 * $valorA * $valorC;
   
    
    if($delta < 0){
        echo "A equação não possui raízes reais.";
    } else if($delta == 0){
        echo " A equação possui uma única raiz real. <br>";
        $x = (-$valorB) / (2 * $valorA);
        echo "X1 = $x";
    } else{
    $x1 = ((-$valorB) + sqrt($delta)) / (2 * $valorA);
    $x2 = ((-$valorB) - sqrt($delta)) / (2 * $valorA);

    echo "O valor de X1 = $x1 <br>";
    echo "O valor de X2 = $x2";
    }
  }
?>