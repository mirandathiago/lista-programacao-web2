<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão Clima</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Clima: 
        <select name="clima">
            <option value=""></option>
            <option value="ensolarado">Ensolarado</option>
            <option value="ameno">Ameno</option>
            <option value="chuvoso">Chuvoso</option>
            <option value="nublado">Nublado</option>
            <option value="tempestuoso">Tempestuoso</option>
        </select>
        </label>
        <button>Enviar</button>
    </form>
    <br>
    <div>
        <?php
        $metodo = $_SERVER['REQUEST_METHOD'];
        if($metodo == "POST"){
            $clima = $_POST['clima'] ?? 0;
            switch($clima){
                case "ensolarado":
                    echo " Com o clima <strong>ensolarado</strong>, recomendamos ir ao Clube.";
                    break;
                case "ameno":
                    echo " Com o clima <strong>ameno</strong>, recomendamos ir ao Parque.";
                    break;
                case "chuvoso":
                    echo " Com o clima <strong>chuvoso</strong>, recomendamos ir ao Cinema.";
                    break;
                case "nublado":
                    echo " Com o clima <strong>nublado</strong>, recomendamos ir ao Museu.";
                    break;
                case "tempestuoso":
                    echo " Com o clima <strong>tempestuoso</strong>, recomendamos ficar em casa.";
                    break;
            }
        }
        ?>
    </div>
</body>
</html>