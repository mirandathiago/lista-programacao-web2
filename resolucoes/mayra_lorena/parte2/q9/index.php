<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Melhor local para ir.</title>
    </head>
    <body>
        <h2>Maria, escolha o clima do dia:</h2>
            <form method="post">
                <label for="clima">Selecione o clima:</label>
                    <select name="clima" required="">
                        <option value="">Escolha uma opção:</option>
                        <option value="ensolarado">Clima Ensolarado</option>
                        <option value="ameno">Clima Ameno</option>
                        <option value="chuvoso">Clima Chuvoso</option>
                        <option value="nublado">Clima Nublado</option>
                        <option value="tempestuoso">Clima Tempestuoso</option>
                    </select>
                    <br><br>
                <button>Ver recomendação</button>
            </form>
        <div>
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $clima = $_POST["clima"];

                    switch($clima){
                        case "ensolarado":
                            $lugar = "Clube";
                            break;
                        case "ameno":
                            $lugar = "Parque";
                            break;
                        case "chuvoso":
                            $lugar = "Cinema";
                            break;
                        case "nublado":
                            $lugar = "Museu";
                            break;
                        case "tempestuoso":
                            $lugar = "Ficar em casa";
                            break;
                        default:
                            echo "Por favor, selecione o clima correspondente!";
                    }

                    echo "<p>Com o clima $clima, recomendamos ir ao $lugar.</p>";
                }
            ?>
        </div>
    </body>
</html>





