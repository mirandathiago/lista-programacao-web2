<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 11 - Parte 3</title>
</head>
<body>
<h1>Selecione suas frutas favoritas</h1>
    <form method="post" action="">
        <input type="checkbox" name="frutas[]" value="Maçã" /> Maçã
        <input type="checkbox" name="frutas[]" value="Banana" /> Banana
        <br>
        <input type="checkbox" name="frutas[]" value="Laranja" /> Laranja
        <input type="checkbox" name="frutas[]" value="Uva" /> Uva
        <br>
        <input type="checkbox" name="frutas[]" value="Abacaxi" /> Abacaxi
        <input type="submit" value="Enviar" />
    </form>
    <div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (($_POST['frutas'])) {
            $frutas = $_POST['frutas'];
            echo "<h2>Frutas favoritas selecionadas:</h2>";
            foreach ($frutas as $fruta) {
                echo ($fruta) . "<br>";
            }
        } else {
            echo "Nenhuma fruta foi selecionada.";
        }
    }
    ?>
    
    </div>
</body>
</html>
