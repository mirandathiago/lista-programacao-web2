<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3 - Parte 2</title>
</head>
<body>
    <!--Crie um formulário que solicite o nome de uma pessoa e ao ser enviado faça uma saudação a esta pessoa dando bom dia, boa tarde ou boa noite de acordo com o horário do dia em que o programa está sendo executado.-->
    <form action="index.php" method="post">
        <label> Nome do usuário:
            <input type="text" name="nome">
        </label>
        <button>Enviar</button>
    </form>
    <div>
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $hora = date("H");
                $nome = $_POST["nome"];

                if($hora >= 5 && $hora <= 12){
                    echo "Bom dia, $nome";
                }else if($hora >= 13 && $hora <= 18){
                    echo "Boa tarde, $nome";
                }else if($hora > 18 && $hora <= 23){
                    echo "Boa noite, $nome";
                }else{
                    echo "Vá dormir, está de madrugada!";
                }
            }
        ?>
    </div>
</body>
</html>