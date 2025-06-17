
<form method="post">
Nome: <input type="text" name="nome"><br>
<input type="submit" value="Saudar">
</form>
<?php
#Crie um formulário que solicite o nome de uma pessoa e ao ser enviado
#faça uma saudação a esta pessoa dando bom dia, boa tarde ou boa noite de
#acordo com o horário do dia em que o programa está sendo executado. Para
#saber a hora do dia você poderá utilizar a função date do PHP passando
#como parâmetro a string “H” que retorna a hora atual no formato 24 horas
$hora = date(‘H’);. de 05 até 12h deve ser dado Bom dia de 13h até 18h deve
ser dado Boa Tarde de 18h até 23h deve ser dado Boa Noite de 00h até 04h
deve ser exibida a mensagem: Vá Dormir, está de Madrugada. Entrada: João
Saída: Bom dia, João!
if ($_POST) {
$nome = $_POST['nome'];
$hora = date('H');
if ($hora >= 5 && $hora <= 12) {
echo "Bom dia, $nome!";
} elseif ($hora >= 13 && $hora <= 18) {
echo "Boa tarde, $nome!";
} elseif ($hora >= 19 && $hora <= 23) {
echo "Boa noite, $nome!";
} else {
echo "Vá dormir, $nome! Está de madrugada.";
}
}
?>
