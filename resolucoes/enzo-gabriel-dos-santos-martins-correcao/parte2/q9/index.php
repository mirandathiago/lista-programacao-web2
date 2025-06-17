<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>
            Selecione o clima:
        <select name="clima">
            <option value="A">Ensolarado</option>
            <option value="B">Ameno</option>
            <option value="C">Chuvoso</option>
            <option value="D">Nublado</option>
            <option value="E">Tempestuoso</option>
        </select>
        </label>
        <button>Enviar</button>
    </form>
    <div>
        <?php 
        #Maria está planejando sair de casa, mas ela quer escolher um local adequado de acordo com o clima do dia. Para isso, ele precisa da sua ajuda para criar um formulário que permita selecionar uma das seguintes opções de clima: ensolarado, ameno, chuvoso, nublado, tempestuoso. Em seguida, utilizando a estrutura de controle switch, você deve indicar qual local é mais apropriado para cada opção de clima escolhida por Maria. Considere as seguintes opções de locais:
            
        if($_SERVER['REQUEST_METHOD']=="POST"){

            $clima = $_POST['clima'];

            switch($clima){
                case "A":
                echo "Com o clima ensolarado, recomendaremos ir ao clube";
                break;
                case "B":
                echo "Com o clima Ameno, recomendaremos ir ao parque";
                break;
                case "C":
                echo "Com o clima chuvosos, recomendaremos ir ao cinema";
                break;
                case "D":
                echo "Com o clima nublado, recomendaremos ir ao museu";
                break;
                case "E":
                echo "Com o clima tempestuoso, recomendaremos ficar em casa";
                break;
            }
        }
        ?>
    </div>
    
</body>
</html>