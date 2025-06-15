<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $num = $_POST['num'] ?? 0;

    if($num >= 0){
        $i = 1;
        while($i <= 10){ 
        $res= ($num * $i);
        echo "$num * $i = $res <br>";
        $i++;
        }
    } else{
        echo "Digite um número inteiro!";
    }
}
?>
