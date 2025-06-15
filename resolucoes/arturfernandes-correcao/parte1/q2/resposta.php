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
		<h1>Dobro e Metade</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>A resposta será exibida aqui.</p>
			<?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $numero = $_POST["numero"];
                    $dobro = $numero * 2;
                    $metade = $numero / 2;

                    echo "<p>Dobro: $dobro</p>";
                    echo "<p>Metade: $metade</p>";
                }
            ?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
	
</body>
</html>