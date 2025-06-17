<!DOCTYPE html>

<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<title>Questão 6 - Parte 2</title>
</head>
<body>
<h1>Verificador de Triângulo</h1>
    <form action="index.php" method="post">
        <label for="lado1">Lado 1:</label>
        <input type="number" name="lado1"><br><br>
        <label for="lado2">Lado 2:</label>
        <input type="number" name="lado2" ><br><br>
        <label for="lado3">Lado 3:</label>
        <input type="number" name="lado3" ><br><br>
        <input type="submit" value="Verificar">
    </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado1 = $_POST['lado1'];
        $lado2 = $_POST['lado2'];
        $lado3 = $_POST['lado3'];
    if (($lado1 + $lado2 > $lado3) && ($lado1 + $lado3 > $lado2) && ($lado2 + $lado3 > $lado1)) {
        
    if ($lado1 == $lado2 && $lado2 == $lado3) {
        echo "É possível formar um triângulo equilátero.";
    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        echo "É possível formar um triângulo isósceles.";
    } else {
        echo "É possível formar um triângulo escaleno.";
        }
    } else {
        echo "Não é possível formar um triângulo.";
    }
}

?>
</body>
</html>