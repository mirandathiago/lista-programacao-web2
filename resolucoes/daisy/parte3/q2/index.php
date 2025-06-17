<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<title>Questão 2 - Parte 3</title>
</head>
<body>
<h1>Calculadora de Tabuada</h1>
<form method="post">
<label for="numero">Digite um número inteiro:</label>
<input type="number" id="numero" name="numero">
<input type="submit" value="Calcular Tabuada">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$numero = ($_POST['numero']);
echo "<h2>Tabuada do número $numero:</h2>";
$i = 1;
while ($i <= 10) {
$resultado = $numero * $i;
echo "$numero x $i = $resultado<br>";
$i++;
}
}
?>
</body>
</html>