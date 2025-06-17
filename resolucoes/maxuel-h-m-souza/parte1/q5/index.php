<!DOCTYPE html>
<html  lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Questão 5 - Emprestimo com juro composto</title>
  </head>
 
  <body>
    <form action="index.php" method="POST">
      <label>Digite o valor do Empréstimo: <input type="number" name="emprestimo"></label>
      <label>Digite o numero de meses de pagamento: <input type="number" name="mes"></label>
      <button>Verificar</button>
    </form>


    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $c = $_POST['emprestimo'] ?? 0;
        $n = $_POST['mes'] ?? 0;
        $total = 0;
       
        if($n > 12 || $n <= 0 || $c <= 0){
          echo "<h2>Mês ou Valor do empréstimo errados</h2>";
        }else{
          $total = $c * ((1 + 0.025) ** $n);
          echo "<h2>O valor total a ser pago é: R$" . number_format($total, 2,',','') . "</h2>";
        }
      }
    ?>
  </body>
</html>