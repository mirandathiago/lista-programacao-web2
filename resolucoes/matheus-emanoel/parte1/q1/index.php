<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Calculadora de Desconto</h2>
    <form method="post" action="index.php">
        <label >Preço Original (R$):</label>
        <input type="number" step="0.01" name="preco" >
        <button>Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $preco_original = $_POST["preco"]; 
        $desconto = $preco_original * 0.10;
        $preco_final = $preco_original - $desconto;
        echo "<h3>Preço com Desconto: R$ " .$preco_final . "</h3>";
    }
    ?>
</body>
</html>
