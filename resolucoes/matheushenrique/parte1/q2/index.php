<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dobro e Metade</title>
</head>
<body>
    <h2>Informe um número</h2>
    <form method="post" action="index.php">
        <label>Número:</label>
        <input type="number" name="numero">
        <button>Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        $n = $_POST['numero'] ?? 0;
        echo "Dobro: ".($n*2)." e Metade: ".($n/2);
    }
    ?>
</body>
</html>