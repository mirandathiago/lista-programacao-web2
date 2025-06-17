<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2 parte 2 - Fácilima </title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Coloque em KWh o seu gasto de energia:
            <input type="number" name="gasto">
        </label>
        <button>Calcular preço a pagar</button>
    </form>
    <div>
        <?php 
        #2- Seu João quer saber quanto vai ser a sua conta de energia no mês apenas olhando para o medidor de energia de sua residência. Para ajudá-lo crie um formulário que receba o consumo de energia elétrica em kWh (quilowatts-hora). Em seguida, crie um código em PHP que calcule o valor da conta de energia com base nas seguintes regras:
        #Até 100 kWh, o valor é de R$ 0,50 por kWh.
        #De 101 a 200 kWh, o valor é de R$ 0,70 por kWh.
        #Acima de 200 kWh, o valor é de R$ 0,87 por kWh.

        if($_SERVER['REQUEST_METHOD']=="POST"){

            $gasto = $_POST["gasto"];
        if($gasto <= 40){
            $valorf = 20;
        }else if($gasto>40 && $gasto<=100){
            $valorf = 20+($gasto * 0.50);
        }else if($gasto>100 && $gasto<=200){
            $valorf = 20+($gasto * 0.70);
        }else if($gasto>200){
            $valorf = 20+($gasto * 0.87);
        };
        
        echo "O valor a ser pago por ".$gasto." KWh é de ".$valorf." reais";
        }
        ?>
    </div>
    
</body>
</html>