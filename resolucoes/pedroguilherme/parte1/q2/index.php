<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Divisão:
            <input type="number" name="num1">
        </label>
        <button>Calcular a divisão</button>
    </form>
    
    <div>
        <?php
        $metodo = $_SERVER["REQUEST_METHOD"];
        $num1 = $_POST['num1'] ?? 0;
        $recebervalor;
        $valorfinal;
        $recebervalor = $num1 / 2;
        $valorfinal = $num1 * 2;
        
       
        echo  "o dobro é $valorfinal e a metade é $recebervalor";




        ?>
    </div>
</body>
</html>