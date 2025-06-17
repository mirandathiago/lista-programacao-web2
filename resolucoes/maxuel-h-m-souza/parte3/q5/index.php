<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Questão 5 - Tempo para quitar</title>
  </head>
 
  <body>
    <form action="index.php" method="POST">
        <label>Digite o valor da divida: <input type="number" name="divida"></label>
        <label>Digite o valor da taxa mensal: <input type="number" name="taxa"></label>
        <label>Digite o valor de pagamento por mês: <input type="number" name="pagamento"></label>
      <button>Verificar</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if(empty($_POST['divida']) && isset($_POST['divida']) || empty($_POST['taxa']) && isset($_POST['taxa']) || empty($_POST['pagamento']) && isset($_POST['pagamento']) || $_POST['divida'] <= 0 || $_POST['taxa'] <= 0 || $_POST['pagamento'] <= 0){
        echo "<h2><strong>Erro</strong></h2>";
      }else{
        $divida = $_POST['divida'] ?? 0;
        $taxa = $_POST['taxa'] ?? 0;
        $pagamento = $_POST['pagamento'] ?? 0;
        $tempo = 0;

        while($divida > 0){
            $divida = $divida - $pagamento;
            $divida = $divida + ($divida * ($taxa/100));
            $tempo = $tempo + 1;
        }

        echo "<h2>Serão necessários $tempo meses</h2>";
       }
    }
    ?>
  </body>
</html>
