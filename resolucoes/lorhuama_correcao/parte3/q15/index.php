<!--Criar um array associativo onde as chaves são os nomes dos alunos e os valores são suas médias finais. Percorra o array com foreach e exiba o nome de cada aluno seguido do status: Aprovado(>=6) e Reprovado(<6)-->
<?php

$alunos = ["Ana" => 8.5, "João" => 5.0, "Carlos" => 6.2];

foreach($alunos as $chave => $valor){
    if($valor >= 6.0){
        echo "$chave: Aprovado<br>";
    }else{
        echo "$chave: Reprovado<br>";
    }
}
?>