<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Informe os dados das cidades:</h2>
    <form method="post" action="index.php">
        <label>População da cidade A:</label>
        <input type="number" name="popA" ><br><br>
        
        <label >Taxa de crescimento da cidade A (%):</label>
        <input type="number" step="0.01" name="taxaA" ><br><br>
        
        <label >População da cidade B:</label>
        <input type="number" name="popB" ><br><br>
        
        <label >Taxa de crescimento da cidade B (%):</label>
        <input type="number" step="0.01" name="taxaB" ><br><br>
        
        <button >Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $popA = $_POST["popA"];
        $taxaA = $_POST["taxaA"] / 100;  // Convertendo para decimal
        $popB = $_POST["popB"];
        $taxaB = $_POST["taxaB"] / 100;  // Convertendo para decimal
        $anos = 0;

        // Se a população da cidade A já for maior que a da cidade B
        if ($popA > $popB) {
            echo "<h3>A cidade A já tem mais habitantes do que a cidade B.</h3>";
        } 
        // Se a taxa de crescimento de A for menor ou igual à de B
        elseif ($taxaA <= $taxaB) {
            echo "<h3>A cidade A não alcançará a população da cidade B com essa taxa de crescimento.</h3>";
        } 
        // Caso contrário, calcular o tempo necessário
        else {
            while ($popA <= $popB) {
                $popA += $popA * $taxaA;
                $popB += $popB * $taxaB;
                $anos++;
            }
            echo "<h3>Serão necessários $anos anos para que a população da cidade A ultrapasse a da cidade B.</h3>";
            echo "<h3>População final da cidade A: " . $popA . "</h3>";
            echo "<h3>População final da cidade B: " .$popB . "</h3>";
        }
    }
    ?>

</body>
</html>