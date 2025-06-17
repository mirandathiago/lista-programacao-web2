<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Saudação</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>A resposta será exibida aqui.</p>
			<?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nome = $_POST["nome"];
                    $hora = date('H');

                    if ($hora >= 5 && $hora <= 12) {
                    echo "<p>Bom dia, $nome!</p>";
                    } elseif ($hora >= 13 && $hora <= 18) {
                    echo "<p>Boa tarde, $nome!</p>";
                    } elseif ($hora >= 19 && $hora <= 23) {
                    echo "<p>Boa noite, $nome!</p>";
                    } else {
                    echo "<p>Vá dormir, $nome! Está de madrugada!</p>";
                    }
                }
            ?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
	
</body>
</html>