<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 5 - parte 2</title>
</head>
<body>
    <form action="index.php" method = "post">
        <label>Insira:
            <input type="number" name = "num1">
        </label>
        <label>Escolha:
            <select name="tipos">
                <option></option>
                <option value = "Par">Para par</option>
                <option value = "Impar">Para ímpar</option>
            </select>
        </label>    
        <button>Verificar</button>
    </form>
    <div>
        <?php
            $metodo = $_SERVER["REQUEST_METHOD"];
            if($metodo == "POST"){
                $num1 = $_POST["num1"];
                $tipos = $_POST["tipos"];
                switch($tipos){
                    case "Par":
                            echo "O seu número é $num1 <br>";
                            $comp = rand(0,10);
                            echo "O do computador é $comp <br>";
                            $resp = $num1 + $comp;
                            if($resp % 2 == 0){
                                echo "$resp <br>";
                                echo "$resp é par você venceu! <br>";
                            }else{
                                echo "$resp <br>";
                                echo " $resp é ímpar, o computador venceu! <br>";
                            }
                    break;
                    case "Impar":
                            echo "O seu número é $num1 <br>";
                            $comp = rand(0,10);
                            echo "O do computador é $comp <br>";
                            $resp = $num1 + $comp;
                            if($resp % 2 == 1){
                                echo "$resp <br>";
                                echo "$resp é ímpar você venceu! <br>";
                            }else{
                                echo "$resp <br>";
                                echo "$resp é par computador venceu! <br>";
                            }
                    break;
    
                }
            }
        
        
        ?>
    </div>
</body>
</html>