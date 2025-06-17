<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fatorial de um Número.</title>
    </head>
    <body>
        <h2>Calcular Fatorial de um Número</h2>
            <form method="post">
                <label>Digite um número inteiro:</label>
                <input type="number" name="numero" required="">
                <button>Calcular</button>
            </form>
        <div>
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $numero = (int) $_POST["numero"];
                    $fatorial = 1;
                    $calculo = "";

                    if($numero == 0){
                        $fatorial = 1;
                        $calculo = "0! = 1";
                    }else{
                        for($i = $numero; $i >= 1; $i--){
                            $fatorial *= $i;
                            $calculo .= $i;
                            if($i > 1){
                                $calculo . " x ";
                            }
                        }
                    }
                    echo "<p>Entrada: $numero</p>";
                    echo "<p>Saída: $fatorial</p>";
                    echo "<p>Cálculo realizado: $calculo</p>";
                }
            ?>
        </div>
    </body>
</html>





