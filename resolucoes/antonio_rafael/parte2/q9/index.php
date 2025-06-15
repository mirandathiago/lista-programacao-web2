<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia Adequado</title>
</head>
<body>
    <form action = "resposta.php" method = "post"> 
        <label for="clima"> Selecione as opções de clima de acordo o dia:
            <select name="clima" id="clima">
                <option value = "ensolarado"> Ensolarado</option>
                <option value = "ameno"> Ameno</option>
                 <option value = "chuvoso"> Chuvoso</option>
                  <option value = "nublado"> Nublado</option>
                   <option value = "tempestuoso"> Tempestuoso</option>
            </select>
            <button> Verificar </button>
        </label>
    </form>
</body>
</html>