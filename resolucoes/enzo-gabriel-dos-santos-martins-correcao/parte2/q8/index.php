<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 8 parte 2 - Deu até sono essa facilidade</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>
            Insira sua altura em centimetros:
            <input type="number" name="altura">
        </label>
        <label>
            Insira seu peso em kg:
            <input type="number" name="peso">
        </label>
        <button>Calcular IMC</button>
    </form>
    <div>
        <?php 
        # O IMC (Índice de Massa Corporal) é uma medida que indica se a pessoa está dentro do peso ideal.Crie um formulário que permita ao usuário informar o peso e a altura. Com base nesses dados, calcule o IMC (Índice de Massa Corporal) e exiba em qual faixa de peso a pessoa se encontra. Utilize as seguintes faixas: abaixo do peso (IMC menor que 18,5), peso normal (IMC entre 18,5 e 24,9), sobrepeso (IMC entre 25 e 29,9), obesidade grau 1 (IMC entre 30 e 34,9), obesidade grau 2 (IMC entre 35 e 39,9) e obesidade grau 3 (IMC igual ou maior que 40).

        if($_SERVER['REQUEST_METHOD']=='POST'){
            
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];
            $altura = $altura / 100;
            $imc = $peso / ($altura*$altura);
            $imc = number_format( $imc, 2, '.');

            if($imc < 18.5){
                echo "O imc é de ".$imc." e está abaixo do peso";
            }else if($imc >= 18.5 && $imc <= 24.9 ){
                echo "O imc é de ".$imc." e está com peso normal";
            }else if($imc>=25 && $imc <= 29.9){
                echo "O imc é de ".$imc." e está com sobrepeso";
            }else if($imc>=30 && $imc <= 34.9){
                echo "O imc é de ".$imc." e está com obesidade grau 1";
            }else if($imc>=35 && $imc <= 39.9){
                echo "O imc é de ".$imc." e está com obesidade grau 2";
            }else if($imc>40){
                echo "O imc é de ".$imc." e está com obesidade grau 3";
            }
        }
        ?>
    </div>
</body>
</html>