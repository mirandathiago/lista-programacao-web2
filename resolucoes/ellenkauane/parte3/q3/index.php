<form method="post">
<label>Digite um número N:</label>
<input type="number" name="n" required>
<input type="submit" value="Calcular Soma">
</form>
<?php
#Joãozinho está estudando matemática e precisa saber qual é o resultado da soma dos
#números de 1 a N. Crie um programa que permita ao usuário informar um número inteiro N
#e, utilizando um laço de repetição do tipo for, calcule a soma dos números de 1 a N.
#Exemplo de entrada: N: 5 Exemplo de saída: Soma dos números de 1 a 5: 15

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$n = intval($_POST["n"]);
$soma = 0;
for ($i = 1; $i <= $n; $i++) {
$soma += $i;
}
echo "A soma de 1 até $n é: $soma";
}
?>
</body>
</html>
