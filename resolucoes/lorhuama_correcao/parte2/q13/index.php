<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 13 - Parte 2</title>
</head>
<body>
    <!--Crie um formulário com dois campos numéricos (valor1 e valor2) e um campo select para o usuário escolher uma operação: Soma, Subtração, Multiplicação, Divisão.-->

    <form action="index.php" method="post">
        <label>Valor 1:
            <input type="number" name="valor1">
        </label>
        <label>Valor 2:
            <input type="number" name="valor2">
        </label>
        <label>Operação:
            <select name="operacao">
                <option></option>
                <option value="A">Soma</option>
                <option value="B">Subtração</option>
                <option value="C">Multiplicação</option>
                <option value="D">Divisão</option>
            </select>
        </label>
        <button>Calcular</button>
    </form>

    <div>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $valor1 = $_POST["valor1"];
                $valor2 = $_POST["valor2"];
                $valor = $_POST["operacao"];
                $resultado = 0;

                switch($valor){
                case "A":
                    $resultado = $valor1 + $valor2;
                    echo "Resultado da Soma: $resultado";
                    break;
                case "B":
                    $resultado = $valor1 - $valor2;
                    echo "Resultado da Subtração: $resultado";
                    break;
                case "C":
                    $resultado = $valor1 * $valor2;
                    echo "Resultado da Multiplicação: $resultado";
                    break;
                case "D":
                    $resultado = $valor1 / $valor2;
                    echo "Resultado da Divisão: $resultado";
                    break;
                }
            }
        ?>
    </div>
</body>
</html>