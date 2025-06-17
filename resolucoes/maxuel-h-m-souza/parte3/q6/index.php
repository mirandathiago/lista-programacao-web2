<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Questão 6 - Tempo da produção</title>
  </head>
 
  <body>
    <form action="index.php" method="POST">
        <label>Digite o tempo de duração: <input type="number" name="segundos"></label>
      <button>Verificar</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if(empty($_POST['segundos']) && isset($_POST['segundos']) || $_POST['segundos'] < 0){
        echo "<h2><strong>Erro</strong></h2>";
      }else{
        $segundos = $_POST['segundos'] ?? 0;
        $minutos = 0;
        $horas = 0;

        while($segundos > 59){
            if($segundos > 3600){
                $segundos = $segundos - 3600;
                $horas = $horas + 1;
            }else if($segundos >= 60){
                $segundos = $segundos - 60;
                $minutos = $minutos + 1;
            }
        }

        echo "<h2>O tempo de duração informado será de: $horas:$minutos:$segundos </h2>";
       }
    }
    ?>
  </body>
</html>
