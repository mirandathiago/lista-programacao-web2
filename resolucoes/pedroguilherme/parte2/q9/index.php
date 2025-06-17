<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 9</title>
</head>
<body>
    <form action="index.php" method="post">
        <h1>Escolha uma opção</h1>
      <label>Qual a opção vc deseja:        
           <select name="categoria">
                 <option></option>
                <option value="A">Ensolarado</option>
                <option value="B">Ameno</option>
                <option value="C">chuvoso</option>
                <option value="D">nublado</option>
                <option value="E">Tempestade</option>
           </select>
      </label>
      <button>Enviar:</button>
      
    </form>
    <div>
        <?php
         if($_SERVER['REQUEST_METHOD'] == "POST"){
            $categoria = $_POST['categoria'];
            switch ($categoria) {
            case "A":
                echo "<p> Com o clima Ensolarado, recomendamos ir ao Clube.</p>";
            break;
            case "B":
            echo "<p> Com o clima Ameno  , recomendamos ir ao parque.</p>";
            break;
            case "C":
            echo "<p> Com o clima Chuvoso, recomendamos ir ao Cinema.</p>";
            break;
            case "D":
            echo "<p> Com o clima Nublado, recomendamos ir ao Museu.</p>";
            break;
            case "E":
            echo "<p> Com o clima Tempestade, recomendamos ir ficar em casa.</p>";
        }
    }

        ?>
         </div>
</body>
</html>