<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte 2 - Questão 9</title>
</head>
<body>
    <form action="parte2_q9.php" method="post">
        <label>
            <select name="clima">
                <option></option>
                <option value="ensolarado">Ensolarado</option>
                <option value="ameno">Ameno</option>
                <option value="chuvoso">Chuvoso</option>
                <option value="nublado">Nublado</option>
                <option value="tempestuoso">Tempestuso</option>
            </select>
        </label>
    </form>
    <div>
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $clima = $_POST['clima'];

                switch($clima){
                    case "ensolarado":
                        echo "Com o clima ensolarado, recomendamos ir ao clube.";
                        break;
                    case "ameno":
                        echo "Com o clima ameno, recomendamos ir ao parque.";
                        break;
                    case "chuvoso":
                        echo "Com o clima chuvo, recomendamos ir ao cinema.";
                        break;
                    case "nublado":
                        echo "Com o clima nublado, recomendamos ir ao museu.";
                        break;
                    case "tempestuoso":
                        echo "Com o clima tempestuoso, recomendamos ficar em casa.";
                        break;
                    default:
                        echo "Escolha um clima.";
                }
            }
        ?>
    </div>
</body>
</html>