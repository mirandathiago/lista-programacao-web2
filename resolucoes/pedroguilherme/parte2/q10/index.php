<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu João</title>
</head>
<body>
    <form action="index.php" method="post">
         <h1>Escolha uma opção</h1>
      <label>Selecione um dia da semana:        
           <select name="semana">
                 <option></option>
                <option value="A">1</option>
                <option value="B">2</option>
                <option value="C">3</option>
                <option value="D">4</option>
                <option value="E">5</option>
                <option value="F">6</option>
                <option value="G">7</option>
           </select>
      </label>
      <button>Enviar:</button>
    </form>

    <div>
         <?php
         if($_SERVER['REQUEST_METHOD'] == "POST"){
            $semana = $_POST['semana'];
            switch ($semana) {
            case "A":
                echo "<p> Dia selecionado foi domingo e não é dia ultil</p>";
            break;
            case "B":
            echo "<p> Dia selecionado foi Segunda-Feira e é dia ultil</p>";
            break;
            case "C":
            echo "<p> Dia selecionado foi Terca-Feira e é dia ultil</p>";
            break;
            case "D":
            echo "<p> Dia selecionado foi Quarta-Feira e é dia ultil</p>";
            break;
            case "E":
            echo "<p> Dia selecionado foi Quinta-Feira e é dia ultil</p>";
            break;
            case "F":
            echo "<p> Dia selecionado foi Sexta-Feira e é dia ultil</p>";
            case "G":
            echo "<p>Dia selecionado foi Sabado e não é dia ultil</p>";
            break;
            default:
            echo "Dia invalido";
            break;
        }
    }

        ?>


    </div>

</body>
</html>

