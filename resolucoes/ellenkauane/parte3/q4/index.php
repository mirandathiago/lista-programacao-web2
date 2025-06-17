<form method="post">
<h3>Escolha suas frutas favoritas:</h3>
<input type="checkbox" name="frutas[]" value="Maçã">Maçã<br>
<input type="checkbox" name="frutas[]" value="Banana">Banana<br>
<input type="checkbox" name="frutas[]" value="Morango">Morango<br>
<input type="checkbox" name="frutas[]" value="Laranja">Laranja<br>
<input type="checkbox" name="frutas[]" value="Uva">Uva<br>
<input type="submit" value="Enviar">
</form>
<?php
#- Escreva um formulário que tenha um campo do tipo checkbox que permita que sejam
#marcadas as frutas favoritas de um usuário. (Devem existir ao menos 5 frutas para serem
#escolhidas). Em seguida processe a informação deste formulário utilizando o comando For
#Each para apresentar as frutas que foram escolhidas.
if (isset($_POST["frutas"])) {
echo "<h3>Frutas selecionadas:</h3>";
foreach ($_POST["frutas"] as $fruta) {
echo "- $fruta <br>";
}
}
?>
</body>
</html>
