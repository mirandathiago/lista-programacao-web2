<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>João e seu Compromisso</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Dia da Semana:
            <select name="dia">
                <option value=""></option>
                <option value="1">1 - Domingo</option>
                <option value="2">2 - Segunda-feira</option>
                <option value="3">3 - Terça-feira</option>
                <option value="4">4 - Quarta-feira</option>
                <option value="5">5 - Quinta-feira</option>
                <option value="6">6 - Sexta-feira</option>
                <option value="7">7 - Sábado</option>
            </select>
        </label>
        <button>Enviar</button>
    </form>
    <div>
        <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $dia = $_POST['dia'] ?? 0;

            switch($dia){
                case 1:
                    echo "Domingo - Final de Semana, dia não útil.";
                break;
                case 2:
                    echo "A Segunda-feira é um dia útil.";
                break;
                 case 3:
                    echo "A Terça-feira é um dia útil.";
                break;
                 case 4:
                    echo "A Quarta-feira é um dia útil.";
                break;
                 case 5:
                    echo "A Quinta-feira é um dia útil.";
                break;
                 case 6:
                    echo "A Sexta-feira é um dia útil.";
                break;
                 case 7:
                    echo "Sábado - Final de Semana, não é dia útil.";
                break;
                default:
                echo "Dia inválido. Selecione um número de 1 a 7.";
            }
        }
        ?>
    </div>
</body>
</html>