<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 9 - Parte 2</title>
</head>
<body>
    <!--Maria está planejando sair de casa, mas ela quer escolher um local adequado de acordo com o clima do dia. Para isso, ele precisa da sua ajuda para criar um formulário que permita selecionar uma das seguintes opções de clima: ensolarado, ameno, chuvoso, nublado, tempestuoso. Em seguida, utilizando a estrutura de controle switch, você deve indicar qual local é mais apropriado para cada opção de clima escolhida por Maria. Considere as seguintes opções de locais:-->
    <form action="index.php" method="post">
        <label>
            Operação:
            <select name="selecao">
                <option></option>
                <option value="ensolarado">Ensolarado</option>
                <option value="ameno">Ameno</option>
                <option value="chuvoso">Chuvoso</option>
                <option value="nublado">Nublado</option>
                <option value="tempestuoso">Tempestuoso</option>
            </select>
        </label>
        <button>Enviar</button>
    </form>
    <div>
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $selecao = $_POST['selecao'];
                switch($selecao){
                    case "ensolarado":
                        echo "<hr>Para esse clima, o Clube é o local mais apropriado";
                    break;
                    case "ameno":
                        echo "<hr>Para esse clima, o Parque é o local mais apropriado";
                    break;
                    case "chuvoso":
                        echo "<hr>Para esse clima, o Cinema é o local mais apropriado";
                    break;
                    case "nublado":
                        echo "<hr>Para esse clima, o Museu é o local mais apropriado";
                    break;
                    case "tempestuoso":
                        echo "<hr>Para esse clima, Ficar em Casa é mais apropriado";
                    break;
                    default:
                        echo "<hr>Escolha um Clima Válido.";
                }
            }
        ?>
    </div>
</body>
</html>