<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <label>Início do intervalo:
      <input type="number" name="inicio" >
    </label><br><br>
    <label>Fim do intervalo:
      <input type="number" name="fim" >
    </label><br><br>
    <button type="submit">Calcular</button>
  </form>

  <div>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $inicio = $_POST['inicio'];
        $fim = $_POST['fim'];
         $quantidadePares = 0;

        for($i = $inicio; $i <= $fim; $i++) {
         if ($i % 2 == 0) {
            $quantidadePares++;
        }
     }

    echo "<p>Quantidade de números pares: $quantidadePares</p>";
  }


    }


    ?>

  </div>

</body>
</html>