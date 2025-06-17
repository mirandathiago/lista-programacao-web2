<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2 - Parte 1</title>
</head>
<body>
    <!--Crie um formulário com um campo numérico e que ao ser enviado irá mostrar o dobro e a metade deste número.-->
    <form action="index.php" method="post">
        <label> Número:
            <input type="number" name="numero">
        </label>
        <button>Enviar</button>
    </form>
    <div>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $numero = $_POST['numero'];
                $metade = $numero / 2;
                $dobro = $numero * 2;
                echo "<hr></hr>";
                echo "<h3>O número é $numero, sua metade é $metade e o seu dobro é $dobro</h3>";
            }
        ?>
    </div>
</body>
</html>