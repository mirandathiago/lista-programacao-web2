<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contagem de Números Pares</title>
</head>
<body>
    <h2>Informe o intervalo de números:</h2>
    <form method="post">
        <label>Início do intervalo:</label>
        <input type="number" name="inicio" required><br><br>

        <label>Fim do intervalo:</label>
        <input type="number" name="fim" required><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inicio = intval($
