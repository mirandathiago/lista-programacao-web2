<?php
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $clima = $_POST['clima'] ?? "";

    switch($clima){
        case "ensolarado":
            echo "<p>Com o clima ensolarado, recomendamos ir ao Clube.</p>";
            break;

        case "ameno":
            echo "<p>Com o clima ameno, recomendamos ir ao Parque.</p>";
            break;

        case "chuvoso":
            echo "<p>Com o clima chuvoso, recomendamos ir ao Cinema.</p>";
            break;

        case "nublado":
            echo "<p>Com o clima nublado, recomendamos ir ao Museu.</p>";
            break;

        case "tempestuoso": 
            echo "<p>Com o clima tempestuoso, o melhor é ficar em casa.</p>";
            break;

        default:
            echo "<p>Clima inválido. Por favor, selecione uma opção válida.</p>";
    }
  }
?>