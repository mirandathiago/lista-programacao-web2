<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 9 - Parte 2</title>
</head>
<body>
    <h1>Escolha um lugar pra sair</h1>
    <form action="q5.php" method="post">
        <select name="clima">
            <option></option>
            <option value="ensolarado">Ensolarado</option>
            <option value="ameno">Ameno</option>
            <option value="chuvoso">Chuvoso</option>
            <option value="nublado">Nublado</option>
            <option value="tempestoso">Tempestoso</option>
        </select>
        <input type="submit" name="calcular" value="Enviar">
    </form>
    <br>
    <div>
        <?php
         $metodo = $_SERVER['REQUEST_METHOD'];
         if($metodo == "POST"){
            $clima = $_POST['clima'] ?? "";
            switch($clima){
                case "ensolarado":
                    echo "Com o clima ensolarado, recomendamos ir ao Clube.";
                    break;
                case "ameno":
                    echo "Com o clima ameno, recomendamos ir ao Parque.";
                    break;
                case "chuvoso":
                    echo "Com o clima chuvoso, recomendamos ir ao Cinema.";
                    break;
                case "nublado":
                    echo "Com o clima nublado, recomendamos ir ao Museu.";
                    break;
                case "tempestoso":
                    echo "Com o clima tempestoso, recomendamos ficar em Casa.";
                    break;
            }
         }
        ?>
    </div>
</body>
</html>
