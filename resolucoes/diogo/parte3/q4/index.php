<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4 - parte 3</title>
</head>
<body>
<form action="index.php" method ="post">
        <label>Inserir valor N:
            <input type="number" name = "N">
        </label>
        <button>Verificar</button>
    </form>
    <div>
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $N = $_POST["N"];
                $soma = 0;
                for($i = 1; $i <= $N; $i++){
                    $soma += $i;
                }
                echo "A soma é $soma";
            }
        ?>
    </div>
</body>
</html>