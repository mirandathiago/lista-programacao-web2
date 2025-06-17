<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>questao 5</title>
</head>
<body>
    <h2>Jogo Par ou Ímpar</h2>
    <form action="index.php" method="post">
        
        <label>Escolha um número (0 a 10):
        <input type="number" name="numero" min="0" max="10" required>
        </label>
        
        <br><br>

        <label>Escolha:</label>
        <input type="radio" name="escolha" value="Par" required>
        <label>Par</label>

        <input type="radio" name="escolha" value="Ímpar" required>
        <label>Ímpar</label>

        <br><br>

        <button>Jogar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        $escolha = $_POST["escolha"];

        $pcn = rand(0, 10);
        $soma = $numero + $pcn;
        $resultado = ($soma % 2 === 0) ? "Par" : "Ímpar";

        echo "<h3>O usuário escolheu $escolha e o número: $numero</h3>";
        echo "<h3>O computador sorteou o número: $pcn";
        echo "<h3>A soma dos dois números é: $soma e ele é $resultado</h3>";

        if ($escolha === $resultado) {
            echo "<h2>O usuário venceu!</h2>";
        } else {
            echo "<h2>O computador venceu!</h2>";
        }
    }
    ?>
</body>
</html>
