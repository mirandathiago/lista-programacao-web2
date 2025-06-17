<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
  
    <title>Caixa Eletrônico</title>
</head>
<body>

    <h2>Informe um valor para sacar:</h2>

    <form action="Questao07.php"  method="post">
        <input type="number" name="valor" min="1" required>
        <input type="submit" value="Calcular Cédulas">
    </form>
 <?php
    if (isset($_POST['valor'])) {
        $valor = intval($_POST['valor']);
        $valorOriginal = $valor;

        $notas = [100, 50, 20, 10, 5, 2, 1];
        $resultado = [];

        $i = 0;
        while ($valor > 0 && $i < count($notas)) {
            $notaAtual = $notas[$i];
            $quantidade = intdiv($valor, $notaAtual);
            $valor = $valor % $notaAtual;
            $resultado[$notaAtual] = $quantidade;
            $i++;
        }

        echo "<h3>Valor informado: R$ $valorOriginal</h3>";
        foreach ($resultado as $nota => $qtd) {
            echo "$qtd nota(s) de R$$nota<br>";
        }
    }
    ?>
    <br> <a href="Questao07.php">Voltar<a>
    <br>

</body>
</html>