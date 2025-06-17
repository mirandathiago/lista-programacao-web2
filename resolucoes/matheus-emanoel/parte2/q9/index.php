<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Escolha o clima do dia:</h2>
    <form action="index.php" method="post">
        <label>Selecione o clima:</label>
        <select name="clima" >
            <option value="ensolarado">Ensolarado</option>
            <option value="ameno">Ameno</option>
            <option value="chuvoso">Chuvoso</option>
            <option value="nublado">Nublado</option>
            <option value="tempestuoso">Tempestuoso</option>
        </select>
        <button >Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $clima = $_POST["clima"];
        $local = "";
 switch ($clima) {
            case "ensolarado":
                $local = "Clube";
                break;
            case "ameno":
                $local = "Parque";
                break;
            case "chuvoso":
                $local = "Cinema";
                break;
            case "nublado":
                $local = "Museu";
                break;
            case "tempestuoso":
                $local = "Ficar em casa";
                break;
            default:
                $local = "Opção inválida";
        }

        echo "<h3>Com o clima $clima, recomendamos ir ao $local.</h3>";
    }
    ?>
</body>
</html>
