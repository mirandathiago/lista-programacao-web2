<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma dos Números de 1 a N.</title>
  </head>
  <body>
    <h2>Calcule a soma dos Números de 1 até N!</h2>
      <form method="post">
        <label>Digite o valor de N, um número inteiro:</label>
        <input type="number" name="numero" required="">
        <button>Calcular Soma</button>
      </form>
    <div>
      <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          $n = (int) $_POST["numero"];
          $soma = 0;

          for($i = 1; $i <= $n; $i++){
            $soma += $i;
          }

          echo "<p>Soma dos números de 1 a $n: $soma</p>";
        }
      ?>
    </div>
  </body>
</html>





