

<form method="post">
Número 1: <input type="number" name="num1"><br>
Número 2: <input type="number" name="num2"><br>
Número 3: <input type="number" name="num3"><br>
<input type="submit" value="Verificar">
</form>
<?php
#Crie um formulário com três campos do tipo number e um botão, em
#seguida utilizando uma estrutura condicional verifique qual o maior
#número e qual o menor número e mostre essa informação na tela.
#Entrada: 2 5 1
#Saída: Menor Número: 1 e o Maior Número: 5
if ($_POST) {
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
$n3 = $_POST['num3'];
$maior = max($n1, $n2, $n3);
$menor = min($n1, $n2, $n3);
echo "Menor Número: $menor e o Maior Número: $maior";
}
?>
