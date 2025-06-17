<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada de um Número.</title>
  </head>
  <body>
      <h2>Calcule a Tabuada de um Número</h2>
        <form method="post">
          <label>Digite um número inteiro:</label>
          <input type="number" name="numero" required="">
          <button>Calcular a Tabuada</button>
        </form>
    <div>
      <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          $numero = (int) $_POST["numero"];
          $contador = 1;

          echo "<h2>Tabuada do número $numero:</h2>";

          while($contador <= 10){
            $resultado = $numero * $contador;
            echo "$numero x $contador = $resultado<br>";
            $contador++;
          }
        }
      ?>
    </div>
  </body>
</html>




