<form method="post">
<label>Digite um número para a tabuada:</label>
<input type="number" name="numero" required>
<input type="submit" value="Gerar Tabuada">
</form>
<?php
#Desenvolva um programa que receba como entrada um número inteiro e calcule a sua
#tabuada de multiplicação utilizando o comando WHILE. Exiba a tabuada na tela. Entrada: 7
#Saída: Tabuada do número 7: 7 x 1 = 7 7 x 2 = 14 7 x 3 = 21 7 x 4 = 28 ... 7 X 10 = 70
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$numero = intval($_POST["numero"]);
echo "<h3>Tabuada do $numero:</h3>";
$i = 1;
while ($i <= 10) {
$resultado = $numero * $i;
echo "$numero x $i = $resultado <br>";
$i++;
}
}
?>


