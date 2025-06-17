<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contador de Números Pares</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="container">

    <h2>Contador de Números Pares</h2>

    <form method="post">
        <input type="number" name="inicio" required placeholder="Início do intervalo">
        <input type="number" name="fim" required placeholder="Fim do intervalo">
        <input type="submit" value="Calcular Pares">
    </form>

    <?php
    if (isset($_POST['inicio']) && isset($_POST['fim'])) {
        $inicio = intval($_POST['inicio']);
        $fim = intval($_POST['fim']);
        $quantidadePares = 0;

        for ($i = $inicio; $i <= $fim; $i++) {
            if ($i % 2 == 0) {
                $quantidadePares++;
            }
        }

        echo "<div class='resultado'>";
        echo "Quantidade de números pares entre $inicio e $fim: $quantidadePares";
        echo "</div>";
    }
    ?>
<br> <a href="Questao03.php">Voltar<a>
    <br>
</div>
</body>
</html>
