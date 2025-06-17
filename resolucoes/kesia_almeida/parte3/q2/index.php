<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tabuada com WHILE</title>
</head>
<body>

    <h2>Informe um número para ver a tabuada:</h2>
    <form action="Questao02.php" method="post">
        <input type="number" name="numero" required>
        <input type="submit" value="Ver Tabuada">
    </form>
    <?php
if (isset($_POST['numero'])) {
    $numero = intval($_POST['numero']);
    $contador = 1;

    echo "<h2>Tabuada do número $numero:</h2>";

    while ($contador <= 10) {
        $resultado = $numero * $contador;
        echo "$numero x $contador = $resultado<br>";
        $contador++;
    }
} else {
    echo "Nenhum número foi informado.";
}
?>
<br> <a href="Questao02.php">Voltar<a>
    <br>

</body>
</html>

