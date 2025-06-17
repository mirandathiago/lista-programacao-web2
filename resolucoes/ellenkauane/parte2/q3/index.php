<form method="post">
Nota 1: <input type="number" step="0.1" name="nota1"><br>
Nota 2: <input type="number" step="0.1" name="nota2"><br>
<input type="submit" value="Calcular Média">
</form>
<?php
#Faça um programa que leia duas notas obtidas por um aluno numa
#disciplina ao longo de um semestre, e calcule a sua média, em seguida
#utilizando uma estrutura condicional atribua um conceito a esta nota
#obedecendo à tabela abaixo: Média de Aproveitamento Conceito Entre 9.0 e
#10.0 A Entre 7.5 e 9.0 B Entre 6.0 e 7.5 C Entre 4.0 e 6.0 D Entre 4.0 e zero E
#Entrada: 8.3 e 7.5 Saída: Média: 7,9 - Conceito: B

if ($_POST) {
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$media = ($nota1 + $nota2) / 2;
echo "Média: $media - Conceito: ";
if ($media >= 9 && $media <= 10) {
echo "A";
} elseif ($media >= 7.5 && $media < 9) {
echo "B";
} elseif ($media >= 6 && $media < 7.5) {
echo "C";
} elseif ($media >= 4 && $media < 6) {
echo "D";
} else {
echo "E";
}
}
?>