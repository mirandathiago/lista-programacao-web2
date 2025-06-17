<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3 - parte 3</title>
</head>
<body>
    <form action="index.php" method ="post">
        <label>Inserir valor de inicio:
            <input type="number" name = "inicio">
        </label>
        <label>Inserir valor final:
            <input type="number" name = "final">
        </label>
        <button>Verificar</button>
    </form>
    <div>
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $inicio = $_POST["inicio"];
                $final = $_POST["final"];
                $cont = 0;
                for($i = $inicio + 1; $i < $final; $i++){
                    if($i % 2 == 0){
                        $cont++;
                    }
                }
                echo "A quantidade de pares é $cont";
            }
        ?>
    </div>
</body>
</html>