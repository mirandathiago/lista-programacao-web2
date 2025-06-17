<form method="post">
<label for="numero">Número:</label>
<input type="number" name="numero" id="numero" required>
<input type="submit" value="Calcular">
</form>
<?php
#- Crie um formulário com um campo numérico e que ao ser enviado irá
#mostrar o dobro e a metade deste número.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$numero = $_POST["numero"];
$dobro = $numero * 2;
$metade = $numero / 2;
echo "<h3>Resultado:</h3>";
echo "Dobro: $dobro <br>";
echo "Metade: $metade";
}
?>