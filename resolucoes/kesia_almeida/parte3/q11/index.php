<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
 
    <title>Frutas Favoritas</title>
</head>
<body>
    

    <h2>Escolha suas frutas favoritas:</h2>
    <form action="Questao11.php" method="post">
        <label><input type="checkbox" name="frutas[]" value="Maçã"> Maçã</label><br>
        <label><input type="checkbox" name="frutas[]" value="Banana"> Banana</label><br>
        <label><input type="checkbox" name="frutas[]" value="Laranja"> Laranja</label><br>
        <label><input type="checkbox" name="frutas[]" value="Morango"> Morango</label><br>
        <label><input type="checkbox" name="frutas[]" value="Abacaxi"> Abacaxi</label><br>
        
        <br>
        <input type="submit" value="Enviar">
    </form>
 <?php
# isset verifica se o campo frutas existe ou se o menos uma fruta foi marcado
if (isset($_POST['frutas'])) {
    echo "<h2>Suas frutas favoritas são:</h2>";
    
    foreach ($_POST['frutas'] as $fruta) {
        echo "• " .($fruta) . "<br>";
    }
} else {
    echo "<p>Você não selecionou nenhuma fruta.</p>";
}
?>
<br> <a href="Questao11.php">Voltar<a>
    <br>
</body>
</html>
