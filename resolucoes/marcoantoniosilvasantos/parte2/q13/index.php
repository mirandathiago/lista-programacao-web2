<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <form action="resposta.php" method="post">
        Valor 1: <input type="number" name="valor1" required><br>
        Valor 2: <input type="number" name="valor2" required><br>
        Operação:
        <select name="operacao">
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
