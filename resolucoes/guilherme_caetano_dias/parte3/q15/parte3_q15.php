<?php

$alunos = [
    "Mateus" => 8.9,
    "Leonardo" => 4.9,
    "Thiago" => 9.5,
    "Letícia" => 10,
    "Marcos" => 1,
    "Gildalva" => 7.3
];

echo "<ul>";
foreach($alunos as $nome => $nota){
    if($nota >= 6){
        echo "<li>$nome foi aprovado(a): $nota</li>";
    }else{
        echo "<li>$nome foi reprovado(a): $nota</li>";
    }
}
echo "</ul>";