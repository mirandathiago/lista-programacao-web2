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
		<h1>Tabuada</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>A resposta será exibida aqui.</p>
			<?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$num = $_POST["numero"];
					$i = 1;

					echo "<h3>Tabuada do $num:</h3>";
					while ($i <= 10) {
						echo "<p>$num x $i = " . ($num * $i) . "</p>";
						$i++;
					}
				}
            ?>       
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
	
</body>
</html>