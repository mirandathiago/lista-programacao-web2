<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2 - Parte 1</title>
</head>
<body>
    <!-- Criar um formulário com um campo numérico e que ao ser enviado irá mostrar o dobro e a metade deste número.-->
    <form action="index.php" method="post">
        <label>Número
            <input type="number" name="numero">
        </label>
        <button>Enviar</button>
    </form>
    
    <div>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $numero = $_POST['numero'];
                $dobro = $numero * 2;
                $metade = $numero / 2;

                echo "Entrada: $numero<br>";
                echo "Dobro: $dobro e Metade: $metade";
            }
        ?>
    </div>
</body>
</html>