<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Conceito</title>
</head>
<body>
<div class="container">

    <h2>Informe as duas notas do aluno:</h2>

    <form method="post">
        <input type="number" name="nota1" step="0.1" min="0" max="10" required placeholder="Nota 1">
        <input type="number" name="nota2" step="0.1" min="0" max="10" required placeholder="Nota 2">
        <input type="submit" value="Calcular Média e Conceito">
    </form>
    <?php
    # o isset serve para ver se algo la no formulario foi preenchido, se sim ele executa o codigo
    if (isset($_POST['nota1']) && isset($_POST['nota2'])) {    
        $nota1 = floatval($_POST['nota1']);
        $nota2 = floatval($_POST['nota2']);
        $media = ($nota1 + $nota2) / 2;
        $conceito = "";

        if ($media >= 9.0 && $media <= 10.0) {
            $conceito = "A";
        } elseif ($media >= 7.5 && $media < 9.0) {
            $conceito = "B";
        } elseif ($media >= 6.0 && $media < 7.5) {
            $conceito = "C";
        } elseif ($media >= 4.0 && $media < 6.0) {
            $conceito = "D";
        } else {
            $conceito = "E";
        }

        echo "<div class='resultado'>";
        echo "Média: " . number_format($media, 1, ',', '') . " - Conceito: $conceito";
        echo "</div>";
    }
    ?>
    <br>
    <a href="Questao11.php">Voltar<a>
    <bR>


</div>
</body>
</html>
