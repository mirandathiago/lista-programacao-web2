<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>questao 9</title>
</head>
<body>

    <h2>Escolha um clima</h2>
    
    <form action="index.php" method="post">
        <label>Clima:
        <select name="clima"required>
            <option value="Selecione">Selecione</option>
            <option value="Ensolarado">Ensolarado</option>
            <option value="Ameno">Ameno</option>
            <option value="Chuvoso">Chuvoso</option>
            <option value="Nublado">Nublado</option>
            <option value="Tempestuoso">Tempestuoso</option>
        </select>
        </label>
        <br><br>
        <button>Ver Recomendação</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $clima = $_POST["clima"];

        switch ($clima) {
            case "Ensolarado":
                echo "<h2>Com o clima $clima, recomendamos ir ao Clube.</h2>";
                break;
            case "Ameno":
                echo "<h2>Com o clima $clima, recomendamos ir ao Parque.</h2>";
                break;
            case "Chuvoso":
                echo "<h2>Com o clima $clima, recomendamos ir ao Cinema.</h2>";
                break;
            case "Nublado":
                echo "<h2>Com o clima $clima, recomendamos ir ao Museu.</h2>";
                break;
            case "Tempestuoso":
                echo "<h2>Com o clima $clima, recomendamos Ficar em casa.</h2>";
                break;
            default:
                echo "<h2>Isto não é um clima, por favor escolha um clima.</h2>";
        }

    }
    ?>
</body>
</html>
