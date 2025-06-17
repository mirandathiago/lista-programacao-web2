<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Questão 6 - Tipos de Trinângulos</title>
  </head>
 
  <body>
    <form action="index.php" method="POST">
      <label>Digite o valor do lado 1: <input type="number" name="lado1"></label>
      <label>Digite o valor do lado 2: <input type="number" name="lado2"></label>
      <label>Digite o valor do lado 3: <input type="number" name="lado3"></label>
      <button>Verificar</button>
    </form>


    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if( (empty($_POST['lado1']) && isset($_POST['lado1'])) || (empty($_POST['lado2']) && isset($_POST['lado2'])) || (empty($_POST['lado3']) && isset($_POST['lado3'])) || $_POST['lado1'] < 0 || $_POST['lado2'] < 0 || $_POST['lado3'] < 0){
        echo "<h2><strong>Erro</strong></h2>";
      }else{
        $lado1 = $_POST['lado1'] ?? 0;
        $lado2 = $_POST['lado2'] ?? 0;
        $lado3 = $_POST['lado3'] ?? 0;


        if(($lado1 + $lado2) > $lado3 && ($lado2 + $lado3) > $lado1 && ($lado1 + $lado3) > $lado2){
          if($lado1 == $lado2 && $lado2 == $lado3){
            echo "<h2>Seu triângulo é Equilatero</h2>";
          }else if($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3){
            echo "<h2>Seu triângulo é Isósceles</h2>";
          }else{
            echo "<h2>Seu triângulo é Escaleno</h2>";
          }
        }else{
          echo "<h2>Não é possivel forma um triângulo</h2>";
        }
      }
    }
    ?>
  </body>
</html>