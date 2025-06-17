<form method="post">
<label>Digite um número inteiro:</label>
<input type="number" name="numero" required>
<input type="submit" value="Calcular Fatorial">
</form>
<?php
# O fatorial de um número é calculado pela multiplicação desse número por todos os seus
#antecessores até chegar ao número 1. Desenvolva um programa que receba como entrada
#através de um formulário um número inteiro e calcule o seu fatorial utilizando o comando
#FOR. O fatorial é representado por: n! = n x (n – 1) x (n – 2) x (n – 3)! Dica: O fatorial de 0 é
#igual a 1, deve-se utilizar uma estrutura condicional para verificar esta situação. Entrada: 3
#Saída: 6 -> Cálculo realizado: 3 x 2 x 1

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$numero = intval($_POST["numero"]);
$fatorial = 1;
if ($numero == 0) {
echo "O fatorial de 0 é 1";
} else {
for ($i = $numero; $i >= 1; $i--) {
$fatorial *= $i;
}
echo "O fatorial de $numero é $fatorial";
}
}
?>
</body>
</html>
