<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Questão 14 - Frete pela região</title>
  </head>
 
  <body>
    <form action="index.php" method="POST">
    <legend>Escolha a região</legend>
    <select name="regiao">
      <option value=""></option>
      <option value="Norte">Norte</option>
      <option value="Nordeste">Nordeste</option>
      <option value="Centro-oeste">Centro-oeste</option>
      <option value="Sudeste">Sudeste</option>
      <option value="Sul">Sul</option>
    </select>
      <label>Digite o peso do produto: <input type="number" name="peso"></label>
      <button>Verificar</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if(empty($_POST['regiao']) && isset($_POST['regiao']) || empty($_POST['peso']) && isset($_POST['peso']) || $_POST['peso'] <= 0){
        echo "<h2><strong>Erro</strong></h2>";
      }else{
        $regiao = $_POST['regiao'] ?? "";
        $peso = $_POST['peso'] ?? 0;
        $frete_total = 0;

        switch($regiao){
          case "Norte":
            $frete_total = 5 + ($peso * 12);
            echo "<br><h2>Região escolhida: $regiao: valor do frete: R$" . number_format($frete_total, 2, ",", "") . "</h2>";
            break;
          case "Nordeste":
            $frete_total = 4 + ($peso * 10);
            echo "<br><h2>Região escolhida: $regiao: valor do frete: R$" . number_format($frete_total, 2, ",", "") . "</h2>";
            break;
          case "Centro-oeste":
            $frete_total = 3 + ($peso * 9);
            echo "<br><h2>Região escolhida: $regiao: valor do frete: R$" . number_format($frete_total, 2, ",", "") . "</h2>";
            break;
          case "Sudeste":
            $frete_total = 2 + ($peso * 8);
            echo "<br><h2>Região escolhida: $regiao: valor do frete: R$" . number_format($frete_total, 2, ",", "") . "</h2>";
            break;
          case "Sul":
            $frete_total = 2.50 + ($peso * 9.5);
            echo "<br><h2>Região escolhida: $regiao: valor do frete: R$" . number_format($frete_total, 2, ",", "") . "</h2>";
            break;
          default:
              echo "<h2><strong>Erro</strong></h2>";
              break;
       }
      }
    }
    ?>
  </body>
</html>