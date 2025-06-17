<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Desconto</title>
</head>
<body>
   <form action="index.php" method="post"> <!-- recebe no mesmo arquivo -->
    <label>Informe o valor para mostrar sua metade e o seu dobro:
        <input type="number" name="valor">
    </label>
    <button>Calcular</button>
   </form>
   <div>
    <?php 
    #recuperando o método utilizado para acessar o arquivo, retorna GET ou POST.
    $metodo = $_SERVER['REQUEST_METHOD']; 
    if($metodo == "POST"){
        $valor = $_POST['valor'] ?? 0;
        $metade = $valor / 2;
        $dobro = $valor *2;
        echo "<h2>A metade é: $metade</h2>";
        echo "<h2>O dobro é: $dobro</h2>";
    }   
    ?>
   </div>
</body>
</html>