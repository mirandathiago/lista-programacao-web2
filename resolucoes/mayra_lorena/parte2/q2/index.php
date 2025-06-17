<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Conta de Energia.</title>
    </head>
    <body>
        <h2>Calcular Conta de Energia</h2>
            <form method="post">
                <label>Consumo de energia (em kWh):</label>
                    <input type="number" name="consumo" required="">
                <button>Calcular</button>
            </form>
        <div>
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $consumo = $_POST["consumo"];
                    $valor = 0;

                    if($consumo <= 100){
                        $valor = $consumo * 0.50;
                    }elseif($consumo <= 200 ){
                        $valor = $consumo * 0.70;
                    }elseif($consumo > 200){
                        $valor = $consumo * 0.87;
                    }
                    if($valor < 20){
                        $valor = 20;
                    }

                    echo "<p>Valor da conta de energia: R$ ". number_format($valor, 2, ',', '.') . ".</p>";
                }
            ?>
        </div>
    </body>
</html>






