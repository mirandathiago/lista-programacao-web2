<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação do maior e menor número</title>
</head>
<body>
    <form action="index.php" method="post">
        <label> Número 1:
            <input type="number" name="num1">
        </label>
        <label> Número 2:
            <input type="number" name="num2">
        </label>
        <label> Número 3:
            <input type="number" name="num3">
        </label>
        <button>Verificar</button>
    </form>
    <div>
        <?php 
        $metodo = $_SERVER['REQUEST_METHOD'];
        if($metodo == "POST"){
            $num1 = $_POST['num1'] ?? 0;
            $num2 = $_POST['num2'] ?? 0;
            $num3 = $_POST['num3'] ?? 0;

            if($num1 > $num2 && $num1 > $num3){
                echo "<h3> O maior número é o primeiro: $num1</h3>";
            }else if($num2 > $num1 && $num2 >$num3){
                echo "<h3> O maior número é o segundo: $num2</h3>";
            }else{
                echo "<h3> O maior número é o terceiro: $num3</h3>";
            }
            
             if($num1 < $num2 && $num1 < $num3){
                echo "<h3> O menor número é o primeiro: $num1</h3>";
            }else if($num2 < $num1 && $num2 < $num3){
                echo "<h3> O menor número é o segundo: $num2</h3>";
            }else{
                echo "<h3> O menor número é o terceiro: $num3</h3>";
            }
        }
        ?>
    </div>
</body>
</html>