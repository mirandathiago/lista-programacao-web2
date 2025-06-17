<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>questao 4</title>
</head>
<body>
    
    <form action="index.php" method="post">
        
    <label>Digite um número:
        <input type="number" name="n">
    </label>
        
        <button>Somar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $N = $_POST["n"];
        $soma = 0;
        for($i = 1;$i <= $N;$i++){
            $soma += $i; 
        }
        echo "<h2>A soma de todos os números de 1 até $N é igual a: $soma</h2>";
    }
    ?>
</body>
</html>
