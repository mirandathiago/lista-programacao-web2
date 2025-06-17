--<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior e Menor Número</title>
</head>
<body>
    <form method="post">
        <label>Número 1: <input type="number" name="num1" required></label><br>
        <label>Número 2: <input type="number" name="num2" required></label><br>
        <label>Número 3: <input type="number" name="num3" required></label><br>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];

        $maior = $num1;
        $menor = $num1;

        if ($num2 > $maior) {
            $maior = $num2;
        }
        if ($num3 > $maior) {
            $maior = $num3;
        }

        if ($num2 < $menor) {
            $menor = $num2;
        }
        if ($num3 < $menor) {
            $menor = $num3;
        }

        echo "<p>Menor Número: $menor e o Maior Número: $maior</p>";
    }
    ?>
      <br>
    <a href="Questao02.php">Voltar<a>
    <bR>
</body>
</html>