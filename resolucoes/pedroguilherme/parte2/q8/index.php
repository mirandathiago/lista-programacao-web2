<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Coloque seu peso:
            <input type="number" name="peso"  >
        </label>
        <br>
        <label>Coloque sua altura em cm:
            <input type="number" name="altura"  >
        </label>
        <br>
        <button>Calcule</button>
    </form>

    <div>
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
            $peso = $_POST['peso'] ?? 0;
            $altura = $_POST['altura'] ?? 0;

            if($peso > 0 && $altura > 0){
                $altura = $altura / 100;
                $calculo = $peso / ($altura * $altura);
                $resultado = $calculo;
                

           

            if($resultado < 18.5){
                echo  "Seu IMC é $resultado , você está abaixo do peso.";
            }elseif($resultado >= 18.5 && $resultado <= 24.9 ){
                echo "Seu IMC é $resultado , você está com o peso normal.";
            }elseif($resultado >= 25 && $resultado <= 29.9 ){
               echo "Seu IMC é $resultado , você está na faixa de sobrepeso.";
            }elseif($resultado >= 30 && $resultado <= 34.9){
               echo "Seu IMC é $resultado , você está na faixa de obesidade Grau 1.";
            }elseif($resultado >= 35 && $resultado <= 39.9){
                echo "Seu IMC é $resultado , você está na faixa de obesidade Grau 2.";
            }else{
                echo "Seu IMC é $resultado , você está na faixa de obesidade Grau 3.";
            }
            }
            }
            




        ?>


    </div>
</body>
</html>