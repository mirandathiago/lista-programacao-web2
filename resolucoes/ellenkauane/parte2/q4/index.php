<form method="post">
Número (menor que 1000): <input type="number" name="numero"><br>
<input type="submit" value="Calcular">
</form>
<?php
#Faça um Programa que receba um número inteiro menor que 1000 e
#imprima a quantidade de centenas, dezenas e unidades do mesmo. Caso
#uma das unidades não exista (For igual a 0) não deve ser exibida. Exemplo:
#Entrada: 326 Saída: 3 centenas, 2 dezenas e 6 unidades Entrada: 12 Saída:1
#dezena e 2 unidades Testar com os seguintes valores: 326, 300, 100, 320,
#310,305, 301, 101, 311, 111, 25, 20, 10, 21, 11, 1, 7 e 16 Dica: Utilize a função
#intdiv para fazer a divisão inteira de um número e o operador % para
#recuperar o resto de uma divisão. Exemplo: Se eu dividir o número 575 de
#forma inteira por 100 o resultado será 5 com o resto 75. Em Seguida se eu
#dividir o número 75 de forma inteira por 10 o resultado será 7 com o resto 5,
#este resto será o número de unidades.

if ($_POST) {
$num = $_POST['numero'];
if ($num >= 0 && $num < 1000) {
$centenas = intdiv($num, 100);
$resto = $num % 100;
$dezenas = intdiv($resto, 10);
$unidades = $resto % 10;
if ($centenas > 0) {
echo "$centenas centena" . ($centenas > 1 ? "s" : "");
if ($dezenas > 0 || $unidades > 0) echo ", ";
}
if ($dezenas > 0) {
echo "$dezenas dezena" . ($dezenas > 1 ? "s" : "");
if ($unidades > 0) echo " e ";
}
if ($unidades > 0) {
echo "$unidades unidade" . ($unidades > 1 ? "s" : "");
}
} else {
echo "Número inválido. Digite um número entre 0 e 999.";
}
}
?>