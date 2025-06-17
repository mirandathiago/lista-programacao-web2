<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 11 - Parte 2</title>
</head>
<body>
    <!--Faça um programa que leia duas notas obtidas por um aluno numa disciplina ao longo de um semestre, e calcule a sua média, em seguida utilizando uma estrutura condicional atribua um conceito a esta nota obedecendo à tabela abaixo:-->
    <form action="index.php" method="post">
        <label> Nota 1:
            <input type="number" name="nota1" step="0.1">
        </label>
        <label> Nota 2:
            <input type="number" name="nota2" step="0.1">
        </label>
        <button>Enviar</button>
    </form>
    <div>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $nota1 = $_POST['nota1'];
                $nota2 = $_POST['nota2'];
                $media = ($nota1 + $nota2) / 2;
                
                if($media >= 9.0 && $media <= 10.0){
                    echo "Média: $media - Conceito: A";
                }else if($media >= 7.5 && $media <= 9.0){
                    echo "Média: $media - Conceito: B";
                }else if($media >= 6.0 && $media <= 7.5){
                    echo "Média: $media - Conceito: C";
                }else if($media >= 4.0 && $media <= 6.0){
                    echo "Média: $media - Conceito: D";
                }else if($media <= 4.0 && $media >= 0){
                    echo "Média: $media - Conceito: E";
                }
            }
        ?>
    </div>
</body>
</html>