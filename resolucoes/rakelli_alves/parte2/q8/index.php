<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de IMC</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Peso(kg):
            <input type="number" name="peso">
        </label>
        <label>Altura(m): 
            <input type="number" name="altura" step="0.1">
        </label>
        <button>Calcular</button>
    </form>
    <div>
        <?php 
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $peso = $_POST['peso'] ?? 0;
            $altura = $_POST['altura'] ?? 0;

            if($altura > 0 && $peso > 0){
                $imc = $peso/($altura * $altura);
               
                if($imc < 18.5){
                    echo "Seu imc é: $imc, você está abaixo do peso";
                }else if($imc >= 18.5 && $imc <=24.9){
                    echo "Seu imc é: $imc, você está com o peso normal"; 
                }else if($imc >= 25 && $imc <= 29.9){
                    echo "Seu imc é: $imc, você está com sobrepeso";
                }else if($imc >= 30 && $imc <= 34.9){
                    echo "Seu imc é: $imc, você está com obesidade nível 1";
                }else if($imc >= 35 && $imc <= 39.9){
                    echo "Seu imc é: $imc, você está com obesidade nível 2";
                }else if ($imc >= 40){
                    echo "Seu imc é: $imc, você está com obesidade nível 3";
                }
            }
        }
        ?>
    </div>
</body>
</html>