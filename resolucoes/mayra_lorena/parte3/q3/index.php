<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Números Pares</title>
  </head>
  <body>
      <h2>Calcular a Quantidade de Números Pares</h2>
        <form method="post">
          <label>Início do intervalo:</label>
            <input type="number" name="inicio" required="">
            <br><br>
          <label>Fim do intervalo:</label>
            <input type="number" name="fim" required="">
            <br><br>
          <button>Calcular</button>
        </form>
      <div>
        <?php
          if($_SERVER["REQUEST_METHOD"] == "POST"){
              $inicio = (int) $_POST["inicio"];
              $fim = (int) $_POST["fim"];
              $quantidadePares = 0;

              for($i = $inicio; $i <= $fim; $i++){
                  if ($i % 2 == 0) {
                    $quantidadePares++;
                  }
              }
              echo "<p>Quantidade de números pares: $quantidadePares.</p>";
          }
        ?>
      </div>
  </body>
</html>





