<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Questão 3 - Números pares em um período</title>
  </head>
 
  <body>
    <form action="index.php" method="POST">
        <label>Digite o número inicial: <input type="number" name="inicial"></label>
        <label>Digite o número final: <input type="number" name="final"></label>
      <button>Verificar</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if($_POST['inicial'] == $_POST['final'] || $_POST['inicial'] == "" || $_POST['final'] == ""){
        echo "<h2><strong>Erro</strong></h2>";
      }else{
        $inicial = $_POST['inicial'] ?? 0;
        $final = $_POST['final'] ?? 0;
        $pares = 0;

        if($inicial > $final){
            $temporaria = $inicial;
            $inicial = $final;
            $final = $temporaria;
        }
        
        for($i = $inicial; $i <= $final; $i++){
             if($i % 2 == 0){
                 $pares = $pares + 1;
             }
        }
      
        echo "<h2>A quantidade de pares entre $inicial e $final é : $pares</h2>";
      }
    }
    ?>
  </body>
</html>