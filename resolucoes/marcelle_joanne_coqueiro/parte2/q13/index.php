<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 13 - Parte 2</title>
</head>
<body>
    <!--Crie um formulário com dois campos numéricos (valor1 e valor2) e um campo select para o usuário escolher uma operação:-->
    <form action="index.php" method="post">
        <label> Número 1:
            <input type="number" name="valor1">
        </label>
        <label> Número 2:
            <input type="number" name="valor2">
        </label>
        <label>
            Operação:
            <select name="operacao">
                <option></option>
                <option value="soma">Soma</option>
                <option value="subtracao">Subtração</option>
                <option value="multiplicacao">Multiplicação</option>
                <option value="divisao">Divisão</option>
            </select>
        </label>
        <button>Enviar</button>
    </form>
    <div>
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $valor1 = $_POST['valor1'];
                $valor2 = $_POST['valor2'];

                $operacao = $_POST['operacao'];
                switch($operacao){
                    case "soma":
                        $resultado = $valor1 + $valor2;
                        echo "$resultado";
                    break;
                    case "subtracao":
                        $resultado = $valor1 - $valor2;
                        echo "$resultado";
                    break;
                    case "multiplicacao":
                        $resultado = $valor1 * $valor2;
                        echo "$resultado";
                    break;
                    case "divisao":
                        $resultado = $valor1 / $valor2;
                        echo "$resultado";
                    break;
                    default:
                        echo "Escolha uma Categoria Válida.";
                }
            }
        ?>
    </div>
</body>
</html>