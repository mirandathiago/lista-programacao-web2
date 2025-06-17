<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Saudação Personalizada</title>
</head>
<body>
  <h2>Saudação</h2>

  <form method="post">
    <label for="nome">Digite seu nome:</label>
    <input type="text" name="nome" id="nome" required>
    <button type="submit">Enviar</button>
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $nome = (trim($_POST["nome"])); 
      $hora = date('H'); 

      if ($hora >= 5 && $hora <= 12) {
        $mensagem = "Bom dia";
      } elseif ($hora >= 13 && $hora <= 18) {
        $mensagem = "Boa tarde";
      } elseif ($hora >= 19 && $hora <= 23) {
        $mensagem = "Boa noite";
      } else { 
        $mensagem = "Vá dormir, está de madrugada!";
      }

      echo "<p>$mensagem, $nome!</p>";
    }
  ?>
  <br>
    <a href="Questao03.php">Voltar<a>
    <bR>

</body>
</html>
