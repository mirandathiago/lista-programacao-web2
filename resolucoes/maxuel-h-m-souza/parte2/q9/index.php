<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Questão 9 - Local e clima</title>
  </head>
 
  <body>
    <form action="index.php" method="POST">
    <legend>Escolha um clima</legend>
    <select name="clima">
      <option value=""></option>
      <option value="Ensolarado">Ensolarado</option>
      <option value="Ameno">Ameno</option>
      <option value="Chuvoso">Chuvoso</option>
      <option value="Nublado">Nublado</option>
      <option value="Tempestuoso">Tempestuoso</option>
    </select>
      <button>Verificar</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if(empty($_POST['clima']) && isset($_POST['clima'])){
        echo "<h2><strong>Erro</strong></h2>";
      }else{
        $clima = $_POST['clima'] ?? "";

       switch($clima){
        case "Ensolarado":
            echo "<br><h2>Com o clima $clima, recomendamos ir para o Clube!</h2>";
            break;
        case "Ameno":
            echo "<br><h2>Com o clima $clima, recomendamos ir para o Parque!</h2>";
            break;
        case "Chuvoso":
            echo "<br><h2>Com o clima $clima, recomendamos ir para o Cinema!</h2>";
            break;
        case "Nublado":
            echo "<br><h2>Com o clima $clima, recomendamos ir para o Museu!</h2>";
            break;
        case "Tempestuoso":
            echo "<br><h2>Com o clima $clima, recomendamos ficar em casa!</h2>";
            break;
        default:
            echo "<br><h2>Escolha uma das opções acima.</h2>";
            break;
       }
      }
    }
    ?>
  </body>
</html>