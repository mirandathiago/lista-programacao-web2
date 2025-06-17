<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Desconto</title>
</head>
<body>
    <h2>Calculadora para Desconto</h2>
    <form method="post" action="questao1.php">
        <label >Preço Original (R$):</label>
        <input type="number" step="0.01" name="preco"> 
        <button>Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $preco_original = $_POST["preco"]; $desconto /* cal o 10% sob */= $preco_original * 0.10; //rcp preço original 
        $preco_final = $preco_original - $desconto ; // cal depois do desc
        echo "<h3>Preço com Desconto: R$ " .$preco_final. "</h3>"; // exb final
    }
    ?>
</body>
</html>
