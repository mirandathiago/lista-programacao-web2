<?php
$alunos = ["Ana" => 7.5, 
           "João" => 5.1, 
           "Carlos" => 6.5
          ];

foreach($alunos as $aluno => $media){
    if($media >= 6){
        echo "$aluno: Aprovado<br>";
    }else{
        echo "$aluno: Reprovado<br>";
    }
}