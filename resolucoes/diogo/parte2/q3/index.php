<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3 - parte 2</title>
</head>
<body>
    <form action="index.php" method = "post">
        <label>Informe o seu nome:
            <input type="text" name = "nome">
        </label>
        <button>Verificar</button>    
    </form>
    <div>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                
                $nome = $_POST["nome"];
                $hora = date("H");
                echo "São $hora horas <br>";

                if($hora >= 05 && $hora <= 12){  
                    echo "Bom dia,$nome!!! ";
                }else if($hora >= 13 && $hora <= 18){
                    echo "Boa tarde,$nome!!!";
                }else if ($hora >= 18 && $hora <= 23){
                    echo "Boa noite,$nome!!!";
                }else{
                    echo "Vá dormir,está de madrugada $nome!";
                }
            }
                
        ?>
    </div>
</body>
</html>