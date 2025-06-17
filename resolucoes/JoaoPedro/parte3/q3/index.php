<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contar Números Pares no Intervalo</title>
</head>
<body>
    
    <form action="index.php" method="post">
        <label for="inicio">Início do intervalo:
        <input type="number" name="inicio" required>
        </label>

        <br><br>

        <label for="fim">Fim do intervalo:
        <input type="number" name="fim" required>
        </label>

        <br><br>

        <button>Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inicio = $_POST["inicio"];
        $fim = $_POST["fim"];
        $qtdpar = 0;

        
        if ($inicio > $fim) {
            echo "<h2>Inicio não pode ser maior que fim, faça de novo com inicio sendo menor que fim</h2>";
        } else {
            for ($i = $inicio; $i <= $fim; $i++) {
                if ($i % 2 == 0) {
                    $qtdpar++;
                }
            }

            echo "<hr>";
            echo "<h2>Quantidade de números pares no intervalo de $inicio a $fim: $qtdpar</h2>";
        }
    }
    ?>
</body>
</html>
