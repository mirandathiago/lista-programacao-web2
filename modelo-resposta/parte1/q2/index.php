<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quetão 2 - Parte 1</title>
</head>
<body>
    <h1>Formulário Dobro e Metade</h1>
    <form method="post">
        <label for="numero">Número:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" value="Calcular">
    </form>

    <div>
        <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = ($_POST["numero"]); 
            $dobro = $numero * 2;                                                                                                                               
            $metade = $numero / 2;
        
            echo "<h3>Resultado:</h3>";
            echo "Dobro: $dobro <br>";
            echo "Metade: $metade";
        }
        ?>
    </div>
</body>
</html>