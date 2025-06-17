<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post">
        <input type="number" name="num1" required>
        <input type="number" name="num2" required>
        <input type="number" name="num3" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"] ?? 0;
        $num2 = $_POST["num2"] ?? 0;
        $num3 = $_POST["num3"] ?? 0;
        
        $maior = $num1;
        if ($num2 > $maior) $maior = $num2;
        if ($num3 > $maior) $maior = $num3;
        
        $menor = $num1;
        if ($num2 < $menor) $menor = $num2;
        if ($num3 < $menor) $menor = $num3;
        
        echo "O menor é: $menor e o maior é $maior";
    }
    ?>
</body>
</html>