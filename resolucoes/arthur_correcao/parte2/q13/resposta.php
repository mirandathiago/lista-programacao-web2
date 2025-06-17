<?php
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$operacao = $_POST['operacao'];
$resultado = 0;

switch ($operacao) {
    case 'soma':
        $resultado = $valor1 + $valor2;
        echo "Resultado da soma: $resultado";
        break;
    case 'subtracao':
        $resultado = $valor1 - $valor2;
        echo "Resultado da subtração: $resultado";
        break;
    case 'multiplicacao':
        $resultado = $valor1 * $valor2;
        echo "Resultado da multiplicação: $resultado";
        break;
    case 'divisao':
        if ($valor2 != 0) {
            $resultado = $valor1 / $valor2;
            echo "Resultado da divisão: $resultado";
        } else {
            echo "Não é possível dividir por zero.";
        }
        break;
    default:
        echo "Operação inválida.";
}
?>
