    <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Questão 13 - Parte 2</title>
</head>
<body>

<h2>Calculadora Básica</h2>
<form action="q3.php" method="post">
    Valor 1: <input type="text" name="valor1">
    Valor 2: <input type="text" name="valor2">
    Operação:
    <select name="operacao">
        <option></option>
       <option value="soma">Soma</option>
       <option value="subtração" >Subtração</option>
       <option value="divisão" >Divisão</option>
       <option value="multiplicação" >Multiplicação</option>
    </select>

    <input type="submit" name="calcular" value="Calcular">

</form>

    <?php
    $metodo = $_SERVER['REQUEST_METHOD'];
    if($metodo == "POST"){
        $operacao = $_POST['operacao'] ?? "";
        $valor1 = $_POST['valor1'] ?? "";
        $valor2 = $_POST['valor2'] ?? "";
        switch($operacao){
            case "soma":
            $resultado = $valor1 + $valor2;
            echo $resultado;
            break;
            case "subtração":
            $resultado = $valor1 - $valor2;
            echo $resultado;
            break;
            case "divisão":
            $resultado = $valor1 / $valor2;
            echo $resultado;
            break;
            case "multiplicação":
            $resultado = $valor1 * $valor2;
            echo $resultado;
            break;
            default;
            echo "Operação Inválida";

        }
    }
    ?>
</body>
</html>
