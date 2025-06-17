<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 11 - Parte 2</title>
</head>
<body>
    <!--Faça um programa que leia duas notas obtidas por um aluno numa disciplina ao longo de um semestre, e calcule a sua média, em seguida utilizando uma estrutura condicional atribua um conceito a esta nota obedecendo à tabela.-->
    <form action="index.php" method="post">
        <label>Nota 1:
            <input type="float" name="nota1">
        </label>
        <label>Nota 2:
            <input type="float" name="nota2">
        </label>
        <button>Enviar</button>
    </form>

    <div>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $nota1 = $_POST["nota1"] ?? 0;
                $nota2 = $_POST["nota2"] ?? 0;

                $media = ($nota1 + $nota2) / 2;

                if($media >= 9.0 && $media <= 10.0){
                    echo "Média: $media - Conceito: A";
                }elseif ($media >= 7.5 && $media < 9.0) {
                    echo "Média: $media - Conceito: B";
                }elseif ($media >= 6.0 && $media < 7.5) {
                    echo "Média: $media - Conceito: C";
                }elseif ($media >= 4.0 && $media < 6.0) {
                    echo "Média: $media - Conceito: D";
                }elseif ($media >= 0 && $media < 4.0) {
                    echo "Média: $media - Conceito: E";
                }
            }
        ?>
    </div>
</body>
</html>