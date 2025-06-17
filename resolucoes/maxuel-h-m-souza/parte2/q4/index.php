<!DOCTYPE html>
<html  lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Questão 4 - Calculadora de Bhaskara</title>
  </head>
 
  <body>
    <form action="index.php" method="POST">
      <label>Digite o valor A: <input type="number" name="a"></label>
      <label>Digite o valor B: <input type="number" name="b"></label>
      <label>Digite o valor C: <input type="number" name="c"></label>
      <button>Calcular</button>
    </form>


    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if(empty($_POST['a']) && isset($_POST['a']) || (empty($_POST['b']) && isset($_POST['b'])) || (empty($_POST['c']) && isset($_POST['c']))){
        echo "<strong>Erro</strong>";
      }else{
        $a = $_POST['a'] ?? 0;
        $b = $_POST['b'] ?? 0;
        $c = $_POST['c'] ?? 0;
        $delta = 0;
        $x1 = 0;
        $x2 = 0;


        $delta = pow($b, 2) - (4 * $a * $c);


        if($delta < 0){
          echo "<h2>A equação não possui raizes exatas!</h2>";
        }else if($delta == 0){
          $x1 = ($b * -1) / (2 * $a);
          echo "<h2>A sua única raiz real é: $x1</h2>";
        }else{
          $x1 = (($b * (-1)) + sqrt($delta)) / (2 * $a);
          $x2 = (($b * (-1)) - sqrt($delta)) / (2 * $a);
          echo "<h2>O valores de suas raízes são: $x1 e $x2</h2>";
        }
      }
    }
    ?>
  </body>
</html>