<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Saudação.</title>
    </head>
    <body>
        <h2>Receba uma Saudação!</h2>
            <form method="post">
                <label>Digite seu nome:</label>
                    <input type="text" name="nome" required="">
                <button>Enviar</button>
            </form>
        <div>
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $nome = $_POST["nome"];
                    $hora = date("H");

                    if($hora >= 5 && $hora <= 12){
                        echo "<p>Bom dia, $nome!</p>";
                    }elseif($hora >= 13 && $hora <= 18){
                        echo "<p>Boa tarde, $nome!</p>";
                    }elseif($hora >= 19 && $hora <= 23){
                        echo "<p>Boa noite, $nome!</p>";
                    }else{
                        echo "<p>Vá dormir, $nome! Já está de madrugada.</p>";
                    }
                }
            ?>
        </div>
    </body>
</html>






