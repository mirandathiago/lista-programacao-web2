<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recomendação de Local por Clima</title>
</head>
<body>
    <h2>Planejador de Passeio da Maria</h2>
    <form method="post" action="index.php">
        <label for="clima">Selecione o clima do dia:</label>
        <select name="clima" id="clima">
            <option value="ensolarado">Ensolarado</option>
            <option value="ameno">Ameno</option>
            <option value="chuvoso">Chuvoso</option>
            <option value="nublado">Nublado</option>
            <option value="tempestuoso">Tempestuoso</option>
        </select>
        <button type="submit">Recomendar Local</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $clima = $_POST["clima"] ?? '';
        $local = '';
        
        switch ($clima) {
            case 'ensolarado':
                $local = 'Clube';
                break;
            case 'ameno':
                $local = 'Parque';
                break;
            case 'chuvoso':
                $local = 'Cinema';
                break;
            case 'nublado':
                $local = 'Museu';
                break;
            case 'tempestuoso':
                $local = 'Ficar em casa';
                break;
            default:
                $local = 'um local desconhecido';
                break;
        }
        
        echo "<p>Com o clima $clima, recomendamos ir ao $local.</p>";
    }
    ?>
</body>
</html>