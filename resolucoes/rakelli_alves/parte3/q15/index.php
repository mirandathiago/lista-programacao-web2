<?php
$notas = ["Ana" => 8.5, "João" => 5.0, "Carlos" => 6.2];

foreach($notas as $nome => $media){
    if($media >= 6){
        echo "$nome: Aprovado(a) <br>";
    }else{
        echo "$nome: Reprovado(a)<br>";
    }
}